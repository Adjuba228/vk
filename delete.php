<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', '40urok');
    $query = mysqli_query($con,"DELETE FROM posts INNER JOIN users ON users.id=posts.users_id WHERE posts.id = {$_GET['id']}");
    header("Location:account.php");


 ?>