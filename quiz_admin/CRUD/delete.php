<?php
// Include the database connection file
require_once("config/db.php");

// Get id parameter value from URL
$Staff_ID = $_GET['Staff_ID'];

// Delete row from the database table
$result = mysqli_query($con, "DELETE FROM admin_details WHERE Staff_ID = $Staff_ID");

// Redirect to the main display page (index.php in our case)
header("Location:../Admin.php");
?>