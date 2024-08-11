<?php
@include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard </title>
    <style></style>
    <link rel="icon" href="img/stud.png">
    <link rel="stylesheet" href="CSS/stud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<!-- Sidebar -->
<div id="mySidebar" class="sidebar text-center">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <div>
      <img src="img/stu.png" alt="">
      <p style="color: rgb(0, 0, 0);font-size: 16px;font-weight: 600;" class="ml-2 mt-3">Student name</p>
    </div>
    <a href="student.php"><img style="position: relative;right:16px;" src="img/ma.png" alt="">&nbsp;Test</a>
    <a href="results.php" style="color:white !important;"   class="active"><img style="position: relative;right:-12px;"  src="img/ra.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Results</a>
    <a href="profile.php"><img src="img/pa.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;Profile</a>
    <a href="logout.php"><img style="position: relative;right:3px;" src="img/lo.png" alt="">&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
</div>

<!-- Topbar -->
<div class="topbar d-flex flex-row justify-content-between align-items-center">
    <div class="">
        <a href=""></a>
    </div>
    <div class="mt-2 ml-4">
        <h5 class="">Your results</h5>
    </div>
    <div class="">
        <button class="openbtn" id="menuBtn" onclick="openNav()">
            <img src="img/menu.png" height="35px" width="35px" alt="">
        </button>
    </div>
</div>
<section class="content">
    <div class="" >
    <table class="table table-responsive-lg table-responsive-md text-white" id="myTable">
        <thead style="padding:0px 1px; color:white; background-color:#438FEC;border: none;">
            <tr style="padding:0px 1px;">
                <th>S.no</th>
                <th>Rollno</th>
                <th>Student name</th>
                <th>Exam name</th>
                <th>Score</th>
                <th>Date</th>
                <th>Pass / fail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>ramji</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
            <tr>
                <td>1</td>
                <td>238114</td>
                <td>Dinesh babu</td>
                <td>General Quiz</td>
                <td>10/10</td>
                <td>03.07.2024</td>
                <td>Pass</td>
            </tr>
        </tbody>
    </table>
</div> 
</section>
<script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
  </script>
<script src="JS/stud.js"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>


</body>

</html>