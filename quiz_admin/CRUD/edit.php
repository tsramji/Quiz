<?php
require_once("../../config.php");
$Staff_ID = $_GET['Staff_ID'];
$result = mysqli_query($conn, "SELECT * FROM staff_admin_details WHERE id = $Staff_ID");
$resultData = mysqli_fetch_assoc($result);

$Staff_ID = $resultData['id'];
$Staff_Name = $resultData['name'];
$Phone_No = $resultData['contact'];
$Email = $resultData['email'];
$Department = $resultData['dept'];
$Password = $resultData['password'];
$UserType = $resultData['user_type'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="mycss copy.css">
<style>
	body{
		background-color: black;
		margin:0 auto;
		position: absolute;
		top:50%;
		left: 50%;
		transform: translate(-50% , -50%)
	}
	h2,div,td,tr,input{
		text-align: center;
		color:black;
		margin:0 auto;
		margin-top:10px;
	}
	.login-form{
		background-color: white;
		width:fit-content;
		border-radius: 20px;
		padding:40px;
	}
</style>
</head>

<body>
	
<div class="login-form">
<h2 class="text-dark">EDIT DATA PANEL</h2>
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Staff_ID</td>
				<td><input type="text"class="form-control" name="Staff_ID" value="<?php echo $Staff_ID; ?>"></td>
			</tr>
			<tr> 
				<td>Staff_Name</td>
				<td><input type="text"class="form-control" name="Staff_Name" value="<?php echo $Staff_Name; ?>"></td>
			</tr>
			<tr> 
				<td>Phone_No</td>
				<td><input type="text"class="form-control" name="Phone_No"  value="<?php echo $Phone_No; ?>" pattern="[0-9]{10}" maxlength="10"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text"class="form-control" name="Email" value="<?php echo $Email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
			</tr>
			<tr> 
				<td>Department</td>
				<td><select id="dept" name="Department" class="form-control" placeholder="Department" value="" title="Please enter your department" class="form-control" required>
									<option value="" disabled class="text-center" selected><?php echo $Department; ?></option>
                                    <option value="EEE">EEE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="CSE">CSE</option>
                                    <option value="MECH">Mech</option>
                                    <option value="IT">IT</option>
                                    <option value="AI_DS">AI & DS</option>
                                    <option value="CYBER_SECURITY">Cyber Security</option>
                                    <option value="IOT">IOT</option>
                                    <option value="MCA">MCA</option>
                                    <option value="MBA">MBA</option> 
                                    <option value="ME_CSE">M.E CSE</option>    
                                    <option value="ME_CS">M.E Communication Systems</option>
                                    <option value="ME_PSE">M.E PSE</option>   
                                </select></td>
				<!-- <td><input type="text"class="form-control" name="Department" value="<?php echo $Department; ?>"></td> -->
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text"class="form-control" name="Password" value="<?php echo $Password; ?>"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
			</tr>
			<tr> 
				<td>User Type</td>
				<td><input type="text"class="form-control" name="UserType" value="<?php echo $UserType; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="Staff_ID" value="<?php echo $Staff_ID; ?>"></td>
				<td><input type="submit"class="btn btn-primary display-3" style="margin-bottom:10px;"name="update" value="Update"></td>
			</tr>
			<div class="navbar-buttons mbr-section-btn">
		<a class="btn btn-primary display-3" href="../Admin.php">RETURN TO HOME
	</a>
</div>
		</table>
	</form>
</body>
</html>
