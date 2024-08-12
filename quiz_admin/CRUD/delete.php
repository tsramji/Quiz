<?php
// Include the database connection file
@include '../../session.php';

// Get id parameter value from URL
$Staff_ID = $_GET['Staff_ID'];

// Delete row from the database table
$result = mysqli_query($conn, "DELETE FROM staff_admin_details WHERE id = $Staff_ID");

// Redirect to the main display page (index.php in our case)
header("Location:../Admin.php");
?>