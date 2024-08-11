<?php



/*if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch distinct departments
$query = "SELECT DISTINCT dept FROM students_details";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$departments = [];
$year = [];
while ($row = $result->fetch_assoc()) {
    $departments[] = $row['dept'];
    $year[] = $row['year'];
}

// Iterate over each department and create a table
foreach ($departments as $department) {
    // Sanitize department name to be used in table names
    $table_name = preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($department_$year));

    // Create a new table for the department
    $create_table_query = "CREATE TABLE IF NOT EXISTS $table_name (
        rollno INT PRIMARY KEY,
        name VARCHAR(50),
        dept VARCHAR(50),
        year VARCHAR(10),
        email VARCHAR(50),
        password VARCHAR(50),
        batch VARCHAR(10)
    )";
    if (!$conn->query($create_table_query)) {
        die("Table creation failed: " . $conn->error);
    }

    // Insert data into the department-specific table
    $insert_data_query = "INSERT IGNORE INTO $table_name (rollno, name, dept, year, email, password, batch)
SELECT rollno, name, dept, year, email, password, batch FROM students_details
WHERE dept = ? and year = ?";

    $stmt = $conn->prepare($insert_data_query);
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param('s', $department);
    if (!$stmt->execute()) {
        die("Execute failed: " . $stmt->error);
    }

    // Uncomment if you want to see the output
    // echo "Table $table_name created and data inserted.<br>";
}



// Create a new PDO instance
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch distinct departments
$query = "SELECT DISTINCT dept FROM staff_admin_details";
$stmt = $pdo->query($query);
$dept = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Iterate over each department and create a table
foreach ($departments as $department) {
    // Sanitize department name to be used in table names
    $table_name = preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($department));

    // Create a new table for the department
    $create_table_query = "CREATE TABLE IF NOT EXISTS `$table_name` (
        id INT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(50),
        dept VARCHAR(100),
        contact VARCHAR(10),
        password VARCHAR(50),
        user_type VARCHAR(10)
    )";
    $pdo->exec($create_table_query);

    // Insert data into the department-specific table
    $insert_data_query = "INSERT IGNORE INTO `$table_name` (id, name, email,dept,contact,password,user_type)
SELECT * FROM staff_admin_details
WHERE dept = :dept
";
    $stmt = $pdo->prepare($insert_data_query);
    $stmt->execute(['dept' => $dept]);
    
    echo "Table `$table_name` created and data inserted.<br>";
}

echo "All department tables have been created and populated.";
*/
?>