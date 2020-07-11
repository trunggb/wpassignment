<?php


 require 'config.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM account WHERE id = '".$id."'";


 $result = $mysqli->query($sql);


 echo json_encode([$id]);


?>