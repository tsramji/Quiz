<?php
session_start();
@include 'config.php';
?>
<?php
//signup code
if(isset($_POST['submit'])){
    $id=($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dept=($_POST['dept']);
    $contact=($_POST['contact']);
    $pass=md5($_POST['pass']);
    $usertype=($_POST['usertype']);
    $select = "SELECT * FROM staff_admin_details WHERE email = '$email' || id = '$id' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $error1[]='user already exist!';

    }
    else{
        $insert = "INSERT INTO staff_admin_details values('$id','$name','$email','$dept','$contact','$pass','$usertype')";
        mysqli_query($conn, $insert);
            header('location:tlogin.php');
    }

};


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
foreach ($dept as $dept) {
    // Sanitize department name to be used in table names
    $table_name = preg_replace('/[^a-zA-Z0-9_]/', '_', strtolower($dept));

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
    
    //echo "Table `$table_name` created and data inserted.<br>";
}

//echo "All department tables have been created and populated.";



?>
<?php
//login code
if(isset($_POST['submit1'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['pass']);
    $select = "SELECT * FROM staff_admin_details WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    $user_type=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
        if($user_type['user_type']=='admin'){
          $_SESSION['user_name']=$email;
          header('location:admin.php');
    }
    else if($user_type['user_type']=='staff'){
          $_SESSION['user_name']=$email;
          header('location:staff.php');
      }
    }
    else{
        $error[]='incorrect email or password!';
        echo "<script>event.preventDefault()</script>";
    }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers | Signin | Signup</title>
    <link rel="icon" href="img/teach.png">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="nav-item nav-link " href="index.php">Students login</a>
                    <a class="nav-item nav-link active" href="tauth.html">Teachers login</a>
                    <a class="nav-item nav-link" href="adauth.html">Admin login</a>
                </nav>
            </div>
        </div>
        <div class="flip-card" id="myCard">
            <div class="flip-card-inside">
                <!-- Login card -->
                <div class="login-card d-flex row p-3" style="border-radius:15px;font: poppins;">
                    <div class="tlogin-back col-6 d-none d-sm-block"></div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 justify-content-center  text-center pt-4 content" style="color: white;">
                        <img src="img/teach.png" alt="" width="108px" height="108px">
                        <h2 class="pt-2">login Now</h2>
                        <p>Enter your email and password here</p>
                        <form action="" method="post" id="myForm">
                        <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<span class = "error-msg">'.$error.'</span>';
                                };
                            };
                        ?>
                            <div class="input-container">
                                <img src="img/email.png" alt="" style="position: absolute;top:18px;left:12px;">
                                <input type="email" placeholder="Email" name="email" id="email" class="form-control" required>
                                <!-- <label for="input" class="floating-label">Email</label> -->
                            </div>
                            <div class="input-container">
                                <img src="img/l.png" alt="" style="position: absolute;top:15px;left:15px;">
                                <input type="password" placeholder="Password" name='pass' minlength="6" title="Please enter your password" id="passw" class="form-control" required>
                                <!-- <label for="input" class="floating-label">Password</label> -->
                                <div onclick="toggle()">
                                    <img src="img/oeye.png"  id="oeye"  alt="" style="position: absolute;top:15px;right:15px;">                            
                                </div>
                            </div>
                            <div class="text-left">
                                <small class="eperror" style="color: red;"></small>
                            </div><br>
                            <div>
                                <input type="submit" name='submit1' class="btn p-3 mb-4" value="Login" />
                            </div>
                            <div>
                                <p>Create an Account? <u href="" onclick="flipCard()"><b>Sign up</b></u></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Sign up card -->
                
                <div class="signup-card d-flex row p-3" style="border-radius:15px;font: poppins;">
                    <div class="signup-back col-6 d-none d-sm-block order-2"></div>
                    <div class="order-1 col-md-6 col-lg-6 col-sm-12 col-xs-12 justify-content-center  text-center pt-4 content-signup" style="color: white;">
                        <img src="img/teach.png" alt="" width="108px" height="108px">
                        <h2 class="pt-2"> Teachers Signup</h2>
                        <p>Enter your details and register here</p>
                        <form action="" method='post' id="myForm">
                    
                        <?php
                            if(isset($error1)){
                                foreach($error1 as $error1){
                                    echo '<span class = "error-msg">'.$error1.'</span>';
                                    echo "<script type='text/javascript'>alert('$error1');</script>";?>
                                <?php
                                };
                            };
                        ?>
                            <div class="input-container">
                                <!--<img src="img/u.png" alt="" style="position: absolute;top:15px;left:12px;">-->
                                <i class="fa fa-id-card" style="font-size:24px; color:black; position: absolute;top:15px;left:12px;"></i>
                                <input type="text" placeholder="Staff ID" name="id" title="Please enter your id"  id="id" class="form-control" required>
                            </div>
                            <div class="input-container">
                                <img src="img/u.png" alt="" style="position: absolute;top:15px;left:12px;">
                                <input type="text" placeholder="Name" name="name" title="Please enter your name"  id="uname" class="form-control" required>
                                <!--<input type="text" placeholder="Name" pattern="^[a-zA-Z0-9_]{3,15}$" title="Username must be 3-15 characters long and can only contain letters, numbers, and underscores."  id="uname" class="form-control" required>
                                 <label for="input" class="floating-label">Email</label> -->
                            </div>
                            <div class="input-container">
                                <img src="img/email.png" alt="" style="position: absolute;top:18px;left:12px;">
                                <input type="email" placeholder="Email" title="Please enter your mail-id" name="email" id="email" class="form-control" required>
                                <!-- <label for="input" class="floating-label">Email</label> -->
                            </div>
                            <div class="input-container">
                                <!--<img src="img/email.png" alt="" style="position: absolute;top:18px;left:12px;">-->
                                <i class="fa fa-graduation-cap" style="font-size:24px; color:black; position: absolute;top:15px;left:12px;" aria-hidden="true"></i>
                                <select id="dept" name="dept" placeholder="Department" title="Please enter your department" class="form-control" required>
                                    <option value="" disabled selected>Select a department</option>
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
                                </select>


                                <!--<input type="text" placeholder="Department" title="Please enter your department" name="dept" id="dept" class="form-control" required>
                                 <label for="input" class="floating-label">Email</label> -->
                            </div>
                            <div class="input-container">
                                <img src="img/pn.png" alt="" style="position: absolute;top:15px;left:10px;">
                                <input type="tel" placeholder="Phone number" name='contact' id="pno" class="form-control" required  pattern="\d{10}" title="Please enter a 10-digit phone number" autocomplete="off">
                                <!-- <label for="input">Phone number</label> -->
                            </div>
                            <div class="input-container">
                                <img src="img/l.png" alt="" style="position: absolute;top:15px;left:15px;">
                                <input type="password" placeholder="Password" minlength="6" title="Please enter a 10-digit phone number" id="pas" name="pass" class="form-control" required>
                                <!-- <label for="input" class="floating-label">Password</label> -->
                                <div onclick="togglep()">
                                    <img src="img/oeye.png"  id="opeye"  alt="" style="position: absolute;top:15px;right:15px;">                            
                                </div>
                            </div>
                            <input type="hidden" name = "usertype" placeholder="usertype" value='staff'>
                            <div class="text-left">
                                <small class="eperror" style="color: red;"></small>
                            </div><br>
                            <div>
                                <input type="submit" name="submit" class="btn p-3 mb-4" />
                            </div>
                            <div>
                                <p>Back to <u href="" onclick="flipCard()"><b>Login </b></u></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function flipCard() {
            var card = document.getElementById("myCard");
            card.classList.toggle("flipped");
        }
    </script>
    <script src="login.js"></script>
</body>
</html>