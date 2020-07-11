<?php

session_start(); 
// initializing variables
$email    = "";
$errors = array();
    //check_validate
/*$servername = "localhost";
$username = "root";
$pword = "";
$dbname = "ducati";*/
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'ducati');

/*if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}*/
            
            // REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fn = mysqli_real_escape_string($conn, $_POST['fname']);
  $ln = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pw = mysqli_real_escape_string($conn, $_POST['password1']);
  $repw = mysqli_real_escape_string($conn, $_POST['password2']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
            
            // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fn)) { array_push($errors, "Firstname is required"); }
   if (empty($ln)) { array_push($errors, "Lastname is required"); }
    $filter = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
            if (!preg_match($filter,$email)){ array_push($errors, "Email wrong format"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($pw)) { array_push($errors, "Password is required"); }
  if ($pw != $repw) {
    array_push($errors, "The two passwords do not match");
                    }
            /*$fn = $_POST['fname'];
            $ln = $_POST['lname'];
            $email = $_POST['email'];
            $pw = $_POST['password'];
            $repw = $_POST['repassword'];
            $phone = $_POST['phone'];
            $gender =$_POST['gender'];
            $address =$_POST['address'];
            $type = $_POST['type']; 
            $complete = 1;

            if (strlen($fn) <=5 ||strlen($fn)>=30)
            {
                echo "You must retype first name<br>"; 
                $complete = 0;
            }
            if(strlen($fn) == 0){
                    echo "Let's type first name<br>"; 
                    $complete = 0;
                }
        
            if (strlen($ln) <=5 ||strlen($ln)>=30)
            {
                echo "You must retype last name<br>"; 
                $complete = 0;
            }
            if(strlen($ln) == 0){
                    echo "Let's type last name<br>"; 
                    $complete = 0;
                }

            $filter = "/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
            if (!preg_match($filter,$email))
            {
                echo "You must retype email<br>";
                $complete = 0;
            }
            else
            {
                if(strlen($email) == 0){
                    echo "Let's type email<br>"; 
                    $complete = 0;
                }
            }

            if(!preg_match('/^[0-9]{10}+$/', $phone))  
             {
                echo "You must retype phone<br>";
                $complete = 0;
            }
            else
            {
                if(strlen($phone) == 0){
                    echo "Let's type phone<br>"; 
                    $complete = 0;
                }
            }


            if(strlen($pw) <= 8 ||strlen($pw)>=30)
            {
                echo "You must retype password<br>";
                $complete = 0;
            }
            else
            {
                if(strlen($pw) == 0){
                    echo "Let's type password<br>"; 
                    $complete = 0;
                }
            }

            if(!$pw==$repw)
            {
                echo "Password is not same";
                $complete = 0;
            } */
        

            // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `account` WHERE `email`='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $account = mysqli_fetch_assoc($result);
  
  if ($account) { // if user exists
     if ($account['email'] === $email) {
      array_push($errors, "email already exists");
    }
    }

        //No eror input
           if (count($errors) == 0) {
                //$pw= md5($pw);//encrypt the password before saving in the database

                //$fn = "'" .$fn."'";
                //$ln = "'" .$ln."'";
                $sql = "INSERT INTO `account` (`fname`, `lname`, `email`, `gender`, `password`, 
                 `phone`, `address`, `type`) VALUES ($fn, $ln, $email, $gender, $pw, $phone, $address, $type)";
                mysqli_query($conn, $sql);
                        //echo "New account created successfully";
                        $_SESSION['email'] = $email;
                        $_SESSION['success'] = "You are now logged in";
                            header("Location: login.php");
            } 
        }

            mysqli_close($conn);
            ?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
    
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Firstname</label>
      <input type="text" name="fname" value="<?php //echo $fn; ?>">
    </div>
    <div class="input-group">
      <label>Lastname</label>
      <input type="text" name="lname" value="<?php //echo $ln; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php //echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input  name="gender" value="<?php //echo $gender; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password2">
    </div>
     <div class="input-group">
      <label>Email</label>
      <input  name="phone" value="<?php ///echo $phone; ?>">
    </div>
     <div class="input-group">
      <label>Email</label>
      <input  name="address" value="<?php //echo $address; ?>">
    </div>
     <div class="input-group">
      <label>Email</label>
      <input  name="type" value="<?php //echo $type; ?>">
    </div>

    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</body>
</html>




<!--<!doctype html>
<html>
<head>
<title>Ducati</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />


<script>
    function dangnhap()
    {

        window.location="login.php";
    }
</script>
</head>
<body>
<h1 class="w3ls">Form Register</h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1">Trần Văn Tâm</h2>
        <p class="agileits2">Bai 3- Lab 9</p>
    </div>
    <div class="content-agile2">
        <form action="register.php" method="post">
            <div class="form-control w3layouts"> 
                <input type="text" id="firstname" name="fname" placeholder="Họ và tên" title="Please enter your First Name" >
            </div>

            <div class="form-control w3layouts">    
                <input type="text" id="name" name="lname" placeholder="Tên đăng nhập" title="Vui lòng nhập tên đang nhập" required="">
            </div>

            <div class="form-control agileinfo">    
                <input type="text" class="lock" name="email" placeholder="Mật khẩu" required="">
            </div>  

            <div class="form-control agileinfo">    
                <input type="text" class="lock" name="gender" placeholder="Nhập lại mật khẩu" id="pass" required="">
            </div> 
            <div class="form-control agileinfo">    
                <input type="password" class="lock" name="password" placeholder="Nhập lại mật khẩu" id="password1" required="">
            </div>   
            <div class="form-control agileinfo">    
                <input type="password" class="lock" name="repassword" placeholder="Nhập lại mật khẩu" id="password2" required="">
            </div>   
            <div class="form-control agileinfo">    
                <input class="lock" name="phone" placeholder="Nhập lại mật khẩu" required="">
            </div>      
             <div class="form-control agileinfo">    
                <input class="lock" name="address" placeholder="Nhập lại mật khẩu" required="">
            </div>           
             <div class="form-control agileinfo">    
                <input class="lock" name="type" placeholder="Nhập lại mật khẩu" required="">
            </div>     
            
            <input type="submit" class="register" value="Register" name="reg_user">
        </form>
        <script>
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("password2").value;
                var pass1=document.getElementById("password1").value;
                if(pass1!=pass2)
                    document.getElementById("password2").setCustomValidity("Mật khẩu phải giống nhau!");
                else
                    document.getElementById("password2").setCustomValidity('');  
                    //empty string means no validation error
            }
        </script>
        <p class="wthree w3l">Đã có tài khoản?</p>
        <button onclick="dangnhap();">Login</button>
        <p class="wthree w3l"><br>Login with ?</p>
        <ul class="social-agileinfo wthree2">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<p class="copyright w3l"> Copyright by <a href="https://w3layouts.com/" target="_blank">Trần Văn Tâm</a></p>
</body>
</html>-->
