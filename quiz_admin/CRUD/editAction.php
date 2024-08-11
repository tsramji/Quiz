<?php
// Include the database connection file
@include '../../session.php';

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$Staff_ID=mysqli_real_escape_string($conn, $_POST['Staff_ID']);
	$Staff_ID = mysqli_real_escape_string($conn, $_POST['Staff_ID']);
	$Staff_Name = mysqli_real_escape_string($conn, $_POST['Staff_Name']);
	$Phone_No = mysqli_real_escape_string($conn, $_POST['Phone_No']);
	$Password = mysqli_real_escape_string($conn, $_POST['Password']);
	$Email = mysqli_real_escape_string($conn, $_POST['Email']);
	$Department = mysqli_real_escape_string($conn, $_POST['Department']);
	$UserType = mysqli_real_escape_string($conn, $_POST['UserType']);
	// Check for empty fields
	if (empty($Staff_Name) || empty($Phone_No) || empty($Password)|| empty($Email)|| empty($Department) ||empty($Staff_ID) ) {
		if (empty($Staff_Name)) {
			echo "<font color='red'>Staff_Name field is empty.</font><br/>";
		}
		if (empty($Phone_No)) {
			echo "<font color='red'>Phone_No field is empty.</font><br/>";
		}
		if (empty($Password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		if (empty($Email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($Department)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}
		if (empty($UserType)) {
			echo "<font color='red'>UserType field is empty.</font><br/>";
		}
		if (empty($Staff_ID)) {
			echo "<font color='red'>Staff_ID field is empty.</font><br/>";
		}
	} else {
		$result = mysqli_query($conn, "Update staff_admin_details SET `name` = '$Staff_Name', `contact` = '$Phone_No', `password` = '$Password',`email` = '$Email',`dept` = '$Department',`id` = '$Staff_ID',`user_type`='$UserType' WHERE `id` = '$Staff_ID'");
		
		header("Location:../Admin.php");
	}
}
