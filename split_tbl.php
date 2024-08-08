<?php
// Database configuration
$host = 'localhost';
$dbname = 'quiz';
$username = 'root';
$password = '';
$dsn = "mysql:host=$host;dbname=$dbname";

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
?>