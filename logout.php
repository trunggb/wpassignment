<?php
	session_start();
	unset($_SESSION['status_login']);
	header("location:login.php");
?>