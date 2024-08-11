<?php
@include '../session.php';
$query = "select * from staff_admin_details ORDER BY id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootsrap4\css\bootstrap.min.css">
    <link rel="stylesheet" href="bootsrap4\css\bootstrap-grid.min.css">
    <link rel="stylesheet" href="style\admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <title>Add Teachers</title>
    <link rel="icon" href="img/adm.png" type="image/x-icon">
    <script src="js/script.js"></script>
    <script src="js/navbutton.js"></script>
</head>

<body>
    <!-- sidebar -->
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
    <div class="topbar d-flex justify-content-end">
        <button class="btn openbtn" style="position:relative;bottom:20px;top:2px;" id="menuBtn" onclick="openNav()"><i class="fa fa-navicon" style="font-size:30px;"></i></button>
    </div>
    <section class="content">
        <div class="container-fluid" style="width:100%;">

            <div class="contents ">
                <h6 class="staff-details">Teacher Details</h6>
                <form class="add-staff-form row ml-1 mr-3" action="CRUD/insert.php" method="post" name="add">
                    <div class="form-group col-lg-3 col-md-3 col-12">
                        <h6>Staff Name</h6>
                        <input type="text" name="Staff_Name" required class="bordered form-control">
                        <h6>Staff ID</h6>
                        <input type="text" name="Staff_ID" required class="bordered form-control">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-12">
                        <h6>Phone No</h6>
                        <input type="tel" name="Phone_No" required class="bordered form-control" pattern="[0-9]{10}" maxlength="10">
                        <h6>Email</h6>
                        <input type="email" name="Email" required class="bordered form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-12">
                        <h6>Department</h6>
                        <select name="Department" id="" required class="bordered  form-control">
                            <option value="BCA" name="Department">BCA</option>
                            <option value="MCA" name="Department">MCA</option>
                            <option value="MBA" name="Department">MBA</option>
                            <option value="B.E" name="Department">B.E</option>
                        </select>

                    </div>
                    <div class="form-group col-lg-3 col-md-3 col-12">
                        <h6>Password</h6>
                        <input type="password" name="Password" required class="bordered  form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <input type="hidden" name = "usertype" placeholder="usertype" value='staff'>
                        <input type="submit" name="submit" class="add-button" value="Add Teacher">
                    </div>
                </form>
                <h6 class="staff-tables">Teachers Table</h6>

                <div class="table-content">
                    <table class="table table-responsive" style="margin:0 auto; " id="myTable">
                        <thead class="bg-primary rounded ">
                            <tr>
                                <!-- <th scope="col" style="width:20%">S.no</th> -->
                                <th scope="col" style="width:20%">Staff_ID</th>
                                <th scope="col" style="width:20%">Staff_Name</th>
                                <th scope="col" style="width:20%">Phone_No</th>
                                <th scope="col" style="width:20%">Password</th>
                                <th scope="col" style="width:20%">Department</th>
                                <th scope="col" style="width:20%">Email</th>
                                <th scope="col" style="width:20%">Action</th>
                            </tr>
                        </thead>
                        </tbody>
                        <tr>
                        <?php
                            @include '../session.php';
                             while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                <!-- <td scope="row"><?php //echo $row['Sno']; ?></td> -->
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['dept']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <?php
                                echo "<td><a href=\"CRUD/edit.php?Staff_ID=$row[id]\"><i class='fa-solid fa-pen'></i></a>  
<a href=\"CRUD/delete.php?Staff_ID=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i class='fa-solid fa-trash' id='delete'></i></a></td>";
                                ?>
                        </tr>
                    <?php
                            }
                    ?>
                    </tbody>
                    </table>
                </div>

            </div>

            <div>
            </div>
        </div>

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/bootsrap4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/datatable.js"></script>
    <script src="js/toggle.js"></script>
</body>

</html>