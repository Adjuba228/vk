<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','40urok');
	$query = mysqli_query($con, "INSERT INTO posts (text,img) VALUES ('{$_GET["text"]}','{$_GET["img"]}')");
	
?>
<?php
  	 header("Location: account.php");
 	 exit();
?>