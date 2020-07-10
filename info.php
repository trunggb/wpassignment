<!--<?php
	/*session_start();
	if (isset($_POST['email'])) $_SESSION['status_login'] = $_POST['email'];
	if  (isset($_SESSION['status_login'])) 
		$name = $_SESSION['status_login'];
	else
		header("location:login.php");*/

?>-->
<?php 
  session_start(); 

  $conn = mysqli_connect('localhost', 'root', '', 'ducati');

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    	<table width='100%' border='0'>
      <tr>
        <th width='40%' colspan="2">Select</th>
        <th width='10%'>First Name</th>
        <th width='10%'>Last Name</th>
        <th width='10%'>Gender</th>
        <th width='10%'>Phone</th>
        <th width='10%'>Address</th>
        <th width='10%'>Type</th>
      </tr>
      <?php 
        $m=$_SESSION['email'];
        $query = "SELECT * FROM `account` WHERE `email`='$m' LIMIT 1";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result) ){
          $fn = $row['fname'];
          $ln = $row['lname'];
          $gender = $row['gender'];
          $phone = $row['phone'];
          $address = $row['address'];
          $type = $row['type'];
        ?>
          <tr id='tr_<?php echo $_SESSION['email']; ?>'>
            <td colspan="2" id='tdc_<?php echo $_SESSION['email']; ?>'>
              <input type="button" class="chinhsua" id='cs_<?php echo $_SESSION['email']; ?>' value="update"/>
              <input type="button" class="chinhsuaxong" id='csx_<?php echo $_SESSION['email']; ?>' value="confirm update"/>
            </td>
      		<td>
               <div  id='id_<?php echo $_SESSION['email']; ?>'> 
                 <?php echo $fn; ?>
               </div> 
            </td>
            <td> 
               <div class = 'edit' id='name_<?php echo $_SESSION['email']; ?>'> 
                 <?php echo $ln; ?>
               </div> 
            </td>
            <td> 
               <div class = 'edit' id='year_<?php echo $_SESSION['email']; ?>'>
                 <?php echo $gender; ?> 
               </div> 
            </td>
            <td> 
               <div class = 'edit' id='year_<?php echo $_SESSION['email']; ?>'>
                 <?php echo $phone; ?> 
               </div> 
            </td>
            <td> 
               <div class = 'edit' id='year_<?php echo $_SESSION['email']; ?>'>
                 <?php echo $address; ?> 
               </div> 
            </td>
            <td> 
               <div class = 'edit' id='year_<?php echo $_SESSION['email']; ?>'>
                 <?php echo $type; ?> 
               </div> 
            </td>
         </tr>
     <?php
      }
      ?>
    </table>
    	<p> <a href="info.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>