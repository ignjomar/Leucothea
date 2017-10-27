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
		$Last_Name = $_POST['lname'];
		$First_Name = $_POST['fname'];
		$Middle_Name = $_POST['mname'];
		$Age = $_POST['age'];
		$Address = $_POST['add'];
		$Contact = $_POST['contactNo'];
		$Blood_Type = $_POST['bloodtype'];
		$Quantity = $_POST['qty'];
		
		
		if($Last_Name!=null&& $First_Name!=null&& $Address!=null&& $Age!=null&& $Contact!=null&& $Quantity!=null){
			$query = "INSERT INTO buyer VALUES( '$BuyerID','$Last_Name','$First_Name','$Middle_Name', '$Age','$Address','$Contact','$Blood_Type','$Quantity', '$Amount')";
			
			if(mysqli_query($conn, $query)){
				header('Location: /new/login.html');
			}
			else{
				echo 'Fail to register user. Your username must be already taken or one of your data is too long'.'<br/>';
			}
		}
		else{
			echo 'Please COMPLETE filling up the forms.'.'<br/>';
		}
	}

	mysqli_close($conn);
?>