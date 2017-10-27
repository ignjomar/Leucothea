<?php
	$conn = mysqli_connect('localhost', 'root', '' , 'leucothea');
	
	if(mysqli_connect_errno())
	{
		echo 'Failed to connect to MySQL Server '.mysqli_connect_error().'<br/>';
	}
	
	else{
		echo 'MySQL Server Connection Success!';
	}
?>
