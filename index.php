<?php
session_start();
@include 'config.php';
?>
<?php
//login code
if(isset($_POST['submit'])){
    $rno = mysqli_real_escape_string($conn, $_POST['rno']);
    $pass=($_POST['pass']);
    $select = "SELECT * FROM students_details WHERE rollno = '$rno' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    $user_type=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
        $_SESSION['user_name']=$rno;
        header('location:user.php');
    }
    else{
        $error[]='incorrect roll_no or password!';
    }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | login</title>
    <link rel="icon" href="img/stud.png">
    <link rel="stylesheet" href="styles.css">
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
    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col-3 col-md-2 text-center">
                <img src="img/logo.png" alt="College Logo" class="img-fluid" height="100px" width="100px">
            </div>
            <div class="col-6 col-md-8 text-center">
                <h1 class="college-name">K.L.N COLLEGE OF ENGINEERING</h1>
            </div>

           

            <div class="col-3 col-md-2 text-center">
                <img src="img/founder.png" alt="Profile Picture" class="img-fluid rounded-circle" height="80px" width="80px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="nav nav-pills nav-fill custom-nav">
                    <a class="nav-item nav-link active" href="index.html">Students login</a>
                    <a class="nav-item nav-link" href="tauth.html">Teachers login</a>
                    <a class="nav-item nav-link" href="adauth.html">Admin login</a>
                </nav>
            </div>
        </div>
        <div class="d-flex row p-3" style="border-radius:15px;font: poppins;">
            <div class="slogin-back col-6 d-none d-sm-block"></div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 justify-content-center  text-center pt-4 content" style="color: white;">
                <img src="img/stu.png" alt="" width="108px" height="108px">
                <h2 class="pt-2">Student login</h2>
                <p>Enter your roll no and password here</p>
                <form action="" method="post" id="myForm">
                    <?php
                        if(isset($error)){
                            foreach($error as $error){
                                echo '<span class = "error-msg">'.$error.'</span>';
                            };
                        };
                    ?>
                    <div class="input-container">
                        <img src="img/u.png" alt="" style="position: absolute;top:15px;left:10px;">
                        <input type="number" name="rno" id="rno" maxlength="6" class="form-control" required>
                        <label for="input" class="floating-label">Roll no</label>
                    </div>
                    <div  class="text-left">
                        <small class="rerror text-left" style="color: red;"></small>
                    </div>
                    <div class="input-container">
                        <img src="img/l.png" alt="" style="position: absolute;top:15px;left:15px;">
                        <input type="password"  name="pass" id="pass" class="form-control" required>
                        <label for="input" class="floating-label">Password</label>
                        <div onclick="togglePasswordVisibility()">
                            <img src="img/oeye.png"  id="eye"  alt="" style="position: absolute;top:15px;right:15px;">                            
                        </div>
                    </div>
                    <div class="text-left">
                        <small class="perror" style="color: red;"></small>
                    </div><br>
                    <div>
                        <input type="submit" name="submit" onclick ="validate(event)" class="btn p-3 mb-4" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>