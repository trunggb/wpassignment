<?php 
	session_start();
	//include('config.php');
	//if (isset($_SESSION['status_login']))
	//if ($_SESSION['status_login'] == true)
		//header("location:info.php");
	$conn = mysqli_connect('localhost', 'root', '', 'ducati');
	$errors = array();


	if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pw = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM `account` WHERE `email`='$email' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: info.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}
 ?>
 <html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>