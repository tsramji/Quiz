<?php
@include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard </title>
    <link rel="icon" href="img/stud.png">
    <link rel="stylesheet" href="stud.css">
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
      <img src="img/stu.png" alt="">
      <p style="color: rgb(0, 0, 0);font-size: 16px;font-weight: 600;" class="ml-2 mt-3">Student name</p>
    </div>
    <a href="student.php" style="color:white !important;" class="active"><img style="position: relative;right:16px;" src="img/ta.png" alt="">&nbsp;Test</a>
    <a href="results.php"><img style="position: relative;right:-5px;"  src="img/res.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results</a>
    <a href="profile.php"><img style="position: relative;right:3px;" src="img/pa.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;Profile</a>
    <a href="logout.php"><img style="position: relative;right:3px;" src="img/lo.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
</div>

<!-- Topbar -->
<div class="topbar d-flex flex-row justify-content-between align-items-center">
    <div class="">
        <a href=""></a>
    </div>
    <div class="mt-2 ml-4">
        <h5 class="">Upcoming test</h5>
    </div>
    <div class="">
        <button class="openbtn" id="menuBtn" onclick="openNav()">
            <img src="img/menu.png" height="35px" width="35px" alt="">
        </button>
    </div>
</div>
<section class="content">
<div class="mt-2 p-2 test-card m-1" onclick="navigate()">
    <div class="row m-2 justify-content-between align-items-center">
        <h4 class="d-flex justify-content-center">General quiz</h4>
        <p class="justify-content-end">Date : 15-05-2024&nbsp;&nbsp;Time : 10:00 Am to 11:00 AM &nbsp;&nbsp;</p>
    </div>
    <p class="align-items-center text-right mr-4"><img src="img/time.png" height="20px" width="20px" alt="">&nbsp;1 hour duration</p>
</div>
<div class="mt-2 p-3 test-card m-1">
    <div class="row m-2 justify-content-between align-items-center">
        <h4 class="d-flex justify-content-center">General quiz</h4>
        <p class="justify-content-end">Date : 15-05-2024&nbsp;&nbsp;Time : 10:00 Am to 11:00 AM &nbsp;&nbsp;</p>
    </div>
    <p class="align-items-center text-right mr-4"><img src="img/time.png" height="20px" width="20px" alt="">&nbsp;1 hour duration</p>
</div>
<div class="mt-2 p-3 test-card m-1">
    <div class="row m-2 justify-content-between align-items-center">
        <h4 class="d-flex justify-content-center">General quiz</h4>
        <p class="justify-content-end">Date : 15-05-2024&nbsp;&nbsp;Time : 10:00 Am to 11:00 AM &nbsp;&nbsp;</p>
    </div>
    <p class="align-items-center text-right mr-4"><img src="img/time.png" height="20px" width="20px" alt="">&nbsp;1 hour duration</p>
</div>
</section>
<script src="JS/stud.js"></script>
</body>

</html>