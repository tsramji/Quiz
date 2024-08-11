<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<?php
@include '../../session.php';
if(isset($_POST["submit"]))
{
     if(empty($_POST['Staff_Name']) || empty($_POST['Staff_ID']) || empty($_POST['Phone_No']) || empty($_POST['Email']) || empty($_POST['Department']) || empty($_POST['Email']))
        {
            echo "Please Fill the all details";
        }
        else
        {
            $Staff_Name=mysqli_real_escape_string($conn,$_POST['Staff_Name']);
            $Staff_ID=mysqli_real_escape_string($conn,$_POST['Staff_ID']);
            $Phone_No=mysqli_real_escape_string($conn,$_POST['Phone_No']);
            $Password=mysqli_real_escape_string($conn,$_POST['Password']);
            $Email=mysqli_real_escape_string($conn,$_POST['Email']);
            $Department=mysqli_real_escape_string($conn,$_POST['Department']);
            $user_type=mysqli_real_escape_string($conn,$_POST['usertype']);
            $query ="INSERT INTO staff_admin_details(`id`,`name`,`email`,`dept`,`contact`,`password`,`user_type`)
            VALUES('$Staff_ID','$Staff_Name','$Email','$Department','$Phone_No','$Password','$user_type')";
            $result = mysqli_query($conn,$query);
          
         if($result){
            header('location:../Admin.php');
           
         }else{
            ?>
            <script>
            confirm("Staff_ID already exist");
            location.replace("../Admin.php");
            </script><?php
         }


        }
}
else{
   ?>
            <script>
            confirm("Submit Button Transfer Error....");
            location.replace("../Admin.php");
            </script><?php
            }



?>

<?php
@include '../../session.php';
//$mysqli = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to create a table for each department
function createTable($mysqli, $table_name) {
    $safe_table_name = mysqli_real_escape_string($mysqli, $table_name);

    $create_table_sql = "
        CREATE TABLE IF NOT EXISTS `$safe_table_name` (
            id INT PRIMARY KEY,
            name VARCHAR(100),
            email VARCHAR(50),
            dept VARCHAR(100),
            contact VARCHAR(10),
            password VARCHAR(50),
            user_type VARCHAR(10)
        );
    ";

    if (!mysqli_query($mysqli, $create_table_sql)) {
        die("Error creating table `$safe_table_name`: " . mysqli_error($mysqli));
    }
}

// Function to upsert (update or insert) data into the table
function upsertData($mysqli, $table_name, $dept) {
    $safe_table_name = mysqli_real_escape_string($mysqli, $table_name);

    $upsert_data_sql = "
        INSERT INTO `$safe_table_name` (id, name, email, dept, contact, password, user_type)
        SELECT id, name, email, dept, contact, password, user_type
        FROM staff_admin_details 
        WHERE dept = ?
        ON DUPLICATE KEY UPDATE
            name = VALUES(name),
            email = VALUES(email),
            dept = VALUES(dept),
            contact = VALUES(contact),
            password = VALUES(password),
            user_type = VALUES(user_type);
    ";

    $stmt = mysqli_prepare($mysqli, $upsert_data_sql);
    mysqli_stmt_bind_param($stmt, 's', $dept);
    if (mysqli_stmt_execute($stmt)) {
        //echo "Data upserted into table `$safe_table_name` successfully.<br>";
    } else {
        echo "Error upserting data into table `$safe_table_name`: " . mysqli_stmt_error($stmt) . "<br>";
    }
    mysqli_stmt_close($stmt);
}

// Function to delete records in a table that are not present in staff_admin_details
function cleanTable($mysqli, $table_name, $dept) {
    $safe_table_name = mysqli_real_escape_string($mysqli, $table_name);

    $clean_table_sql = "
        DELETE FROM `$safe_table_name`
        WHERE id NOT IN (
            SELECT id
            FROM staff_admin_details
            WHERE dept = ?
        );
    ";

    $stmt = mysqli_prepare($mysqli, $clean_table_sql);
    mysqli_stmt_bind_param($stmt, 's', $dept);
    if (mysqli_stmt_execute($stmt)) {
        //echo "Cleaned table `$safe_table_name` successfully.<br>";
    } else {
        echo "Error cleaning table `$safe_table_name`: " . mysqli_stmt_error($stmt) . "<br>";
    }
    mysqli_stmt_close($stmt);
}

// Function to drop a table if it is empty
function dropEmptyTable($mysqli, $table_name) {
    $safe_table_name = mysqli_real_escape_string($mysqli, $table_name);

    // Check if the table is empty
    $check_empty_sql = "SELECT COUNT(*) as count FROM `$safe_table_name`";
    $result = mysqli_query($mysqli, $check_empty_sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row['count'] == 0) {
            // Drop the table if it is empty
            $drop_table_sql = "DROP TABLE `$safe_table_name`";
            if (mysqli_query($mysqli, $drop_table_sql)) {
                //echo "Table `$safe_table_name` has been dropped as it is empty.<br>";
            } else {
                echo "Error dropping table `$safe_table_name`: " . mysqli_error($mysqli) . "<br>";
            }
        } else {
            //echo "Table `$safe_table_name` is not empty. Rows count: " . $row['count'] . "<br>";
        }
        mysqli_free_result($result);
    } else {
        echo "Error checking if table `$safe_table_name` is empty: " . mysqli_error($mysqli) . "<br>";
    }
}

// Function to get all table names in the database
function getAllTables($mysqli) {
    $tables = [];
    $result = mysqli_query($mysqli, "SHOW TABLES");

    if ($result) {
        while ($row = mysqli_fetch_row($result)) {
            $tables[] = $row[0];
        }
        mysqli_free_result($result);
    } else {
        echo "Error fetching table names: " . mysqli_error($mysqli) . "<br>";
    }

    return $tables;
}

// Create and populate tables based on distinct department
$result = mysqli_query($conn, "SELECT DISTINCT dept FROM staff_admin_details");
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $dept = $row['dept'];

        // Sanitize table name
        $safe_dept = preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($dept));
        $table_name = $safe_dept;

        // Create table
        createTable($conn, $table_name);

        // Upsert data and clean table
        upsertData($conn, $table_name, $dept);
        cleanTable($conn, $table_name, $dept);

        // Drop the table if it is empty
        dropEmptyTable($conn, $table_name);
    }
    mysqli_free_result($result);

    //echo "Data updated in tables successfully and empty tables handled.";
} else {
    echo "Error fetching distinct department: " . mysqli_error($mysqli);
}

// Check and drop empty tables
$tables = getAllTables($conn);
foreach ($tables as $table) {
    dropEmptyTable($conn, $table);
}
?>



</body>
</html>