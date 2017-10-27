<?php
	session_start();
	
	$connect = mysqli_connect('localhost','root','','leucothea') or die("Failed to connect from the database.");

	$_SESSION['user'] = $_POST['user'];
	$_SESSION['pass'] = $_POST['pass'];
	
	if($_SESSION['user'] == 'admin' && $_SESSION['pass'] == 'admin'){
		header('Location: /new/admin.html');
	}else{
		$query = mysqli_query($connect,"SELECT * FROM user WHERE Username='".$_POST['user']."' AND Password='".$_POST['pass']."'");
		
		if(mysqli_num_rows($query)>0){
			header('Location: /new/login.html');
		}else{
			echo "<script type = 'text/javascript'>alert('User not found'); window.location.href = '/new/home.html';</script>";
		}
	}
?>

	