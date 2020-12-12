<?php 
	session_start();
 ?>
<?php 


	$image="img/";
	$image_name = $image_dir . basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $image_name);
	$con = mysqli_connect('127.0.0.1', 'root', '', '40urok');

	
	header("location:account.php");
 ?>
