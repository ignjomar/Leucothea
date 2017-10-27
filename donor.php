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
		$First_Name = $_POST['FName'];
		$Middle_Name = $_POST['MName'];
		$Last_Name = $_POST['LName'];
		$Age = $_POST['Age'];
		$Address = $_POST['Add'];
		$Contact = $_POST['ContactNo'];
		
		if($Last_Name!=null&& $First_Name!=null&& $Address!=null&& $Age!=null&& $Contact!=null){
			$query = "INSERT INTO donor VALUES('$DonorID', '$Last_Name','$First_Name','$Middle_Name', '$Age','$Address','$Contact','$Blood_Type')";
			
			if(mysqli_query($conn, $query)){
				echo "<script type = 'text/javascript'>alert('You already registered to donate your blood!'); window.location.href = '/new/login.html';</script>";
			}
			else{
				echo 'Fail to register user. Your username must be already taken or one of your data is too long'.'<br/>';
			}
		}
		else if($Last_Name!=null&& $First_Name!=null&& $Address!=null&& $Age!=null&& $Contact!=null){
			
		}
		else{
			echo 'Please COMPLETE filling up the forms.'.'<br/>';
		}
	}
	mysqli_close($conn);
?>