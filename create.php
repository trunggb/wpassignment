<?php
require 'config.php';
  $post = $_POST;
  $sql = "INSERT INTO account (fname,lname,email,gender,password,phone,address,type) 
    VALUES ('".$post['fname']."',
            '".$post['lname']."',
            '".$post['email']."',
            '".$post['gender']."',
            '".$post['password']."',
            '".$post['phone']."',
            '".$post['address']."',
            '".$post['usertype']."'
        )";

  $result = $mysqli->query($sql);

  $sql = "SELECT * FROM account Order by id desc LIMIT 1"; 


  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();

  echo json_encode($data);

?>