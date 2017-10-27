<?php
	session_start();
	$ifLogged = $_SESSION['ifLoggedIn'];
	
	if($ifLogged==null){
		include ("login.html");
	}
	else if($ifLogged==true){
		include('admin.html');
		echo '<script type="text/javascript">
				logged=true;
			  </script>';
	}
	else{
		include ("login.html");
	}
?>