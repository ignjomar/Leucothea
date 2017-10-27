<?php
	$conn = mysqli_connect('localhost', 'root', '' , 'leucothea');
	
	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL Server '.mysqli_connect_error().'<br/>';
	}
	
	else{
		echo 'MySQL Server Connection Success!'.'<br/>';
		$isConnected = true;
	}
	
	if($isConnected){
		$Username = $_POST['user'];	
		$Password = $_POST['pass'];
		$First_Name = $_POST['Fname'];
		$Middle_Name = $_POST['Mname'];
		$Last_Name = $_POST['Lname'];
		
		
		if($Last_Name!=null&& $First_Name!=null&& $Username!=null&& $Password!=null){
			$query = "INSERT INTO user VALUES('$UserID','$Username','$Password','$First_Name','$Middle_Name', '$Last_Name')";
			
			if(mysqli_query($conn, $query)){
				echo 'Successfully Registered!'.'<br/>';
				header('Location: /new/login.html');
			}
			else{
				echo 'Fail to register user. Your username must be already taken or one of your data is too long'.'<br/>';
			}
		}
		else if($Last_Name==null&& $First_Name==null&& $Username==null&& $Password==null){}
		else{
			echo 'Please COMPLETE filling up the forms.'.'<br/>';
		}
	}

	mysqli_close($conn);
?>