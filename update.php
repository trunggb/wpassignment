<?php
  require 'config.php';
  $id  = $_POST["id"];
  $post = $_POST;


  $sql = "UPDATE account SET 
      fname = '".$post['fname']."',
      lname = '".$post['lname']."',
      gender = '".$post['gender']."',
      type = '".$post['usertype']."',
      email = '".$post['email']."',
      password = '".$post['password']."',
      phone = '".$post['phone']."',
      address = '".$post['address']."'
    WHERE id = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM account WHERE id = '".$id."'"; 


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>