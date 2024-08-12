<?php
@include '../session.php';
//@include 'config.php';
$email = $_SESSION['user_name'];
$sql = "SELECT * FROM staff_admin_details WHERE `email` = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<?php
if(isset($_POST['submit'])){
  $user = $_SESSION['user_name'];
  $opass=($_POST['opass']);
  $npass=($_POST['npass']);
  $select = "SELECT * FROM staff_admin_details WHERE rollno = '$user' && password = '$opass' ";
  $result = mysqli_query($conn, $select);
  if(mysqli_num_rows($result)>0){
    $select = " UPDATE students_details SET password = '$npass' WHERE rollno = $user ";
    $result = mysqli_query($conn, $select);
    $success[]= "Password was changed Successfully!!!";
  }
  else{
      $error[]='Incorrect Password!';
      echo "<script>event.preventDefault()</script>";
  }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard </title>
    <link rel="icon" href="../img/stud.png">
    <link rel="stylesheet" href="../CSS/stud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<!-- Sidebar -->
<div id="mySidebar" class="sidebar text-center">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div>
            <img src="img/adm.png" alt="">
            <p style="color: rgb(0, 0, 0);font-size: 16px;font-weight: 600;" class="ml-2 mt-3">Admin_name</p>
        </div>
        <a href="admin.php" class="active"><img src="img/Vector3.png" height="20px">&nbsp;Add teachers</a>
        <a href="profile.php"><img src="img/Vector4.png" height="20px">&nbsp;Profile</a>
        <a href="../logout.php"><img src="img/logout.png" height="20px">&nbsp;Logout</a>
    </div>
<!-- Topbar -->
<div class="topbar d-flex flex-row justify-content-between align-items-center" style=" position: fixed;top: 0;width:100%;">
    <div class="">
        <a href=""></a>
    </div>
    <div class="mt-2 ml-4">
        <h5 class="">Profile</h5>
    </div>
    <div class="">
        <button class="openbtn" id="menuBtn" onclick="openNav()">
            <img src="../img/menu.png" height="35px" width="35px" alt="">
        </button>
    </div>
</div>
<section class="p-3 mt-5">
<div class="profile p-1">
 <div style="background-color: rgba(255, 255, 255, 0.163);border-radius: 10px;color: white;width:500px;" class="p-3 mt-3 scroll"> 
  <center><h5>Here your Profile</h5></center>
  <form action="" method="POST">
  <?php
    if(isset($error)){
      foreach($error as $error){
        echo '<span class = "error-msg"><center>'.$error.'</center></span>';
        //echo "<script type='text/javascript'>alert('$error');</script>";?>
        <?php
        };
    };
  ?>
  <?php
    if(isset($success)){
      foreach($success as $success){
        echo '<span class = "success-msg"><center>'.$success.'</center></span>';
      };
    };
  ?>
    <label for class="mt-3">Admin-ID</label>
    <input type="number" class="form-control" name="" id="" value="<?php echo $row['id'] ?>" readonly required><br>
    <label for="">Name</label>
    <input type="text" class="form-control" name="" id="" value="<?php echo $row['name'] ?>" readonly required><br>
    <label for="">Department</label>
    <input type="text" class="form-control" name="" id="" value="<?php echo $row['dept'] ?>" readonly required><br>
    <label for="">Mail Id</label>
    <input type="text" class="form-control" name="" id="" value="<?php echo $row['email'] ?>" readonly required><br>
    <label for="">Contact</label>
    <input type="text" class="form-control" name="" id="" value="<?php echo $row['contact'] ?>" readonly required><br>
    <label for="">Password</label>
    <input type="text" class="form-control" name="" id="" value="<?php echo $row['password'] ?>" readonly required>
    <div class="input-container pt-3">
    <!--<label for="">Old Password</label>
      <input type="password" name='opass' minlength="6" title="Please enter a password above 6 digits" id="opass" class="form-control" required>
      <!-- <label for="input" class="floating-label">Password</label> 
      <div onclick="toggle()">
        <img src="img/oeye.png"  id="oeye"  alt="" style="position: absolute;color:white;top:60px;right:15px;">                            
      </div>
    </div>

    <div class="input-container pt-3">
    <label for="">New Password</label>
      <input type="password" name='npass' minlength="6" title="Please enter a password above 6 digits" id="npass" class="form-control" required>
      <!-- <label for="input" class="floating-label">Password</label> 
      <div onclick="togglep()">
        <img src="img/oeye.png"  id="opeye"  alt="" style="position: absolute;color:white;top:60px;right:15px;">                            
      </div>
    </div>
    <div class="text-center mt-4">
      <input type="submit" name="submit" onclick ="validate(event)" class="btn p-3 mb-2" value="Submit" />-->
    </div>
  </form>
</div>
</div>
</section>
<script src="../JS/stud.js"></script>
</body>

</html>