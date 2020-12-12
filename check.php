<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', '40urok');
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone ='{$_GET['phone']}' AND password = '{$_GET['password']}'");
	
	$stroka = $query->fetch_assoc();
	$_SESSION['id']=$stroka['id'];
	
	$num_rows = mysqli_num_rows($query);
	if($num_rows>0){
		header("Location: account.php");
	}else{
		header("Location: index.php?nothing=Такого пользователя нет!");
	}
 ?>