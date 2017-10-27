<?php  
	$conn = mysqli_connect('localhost','root','','leucothea');  
	if(mysqli_connect_error()){   
		echo 'MySQL Error: ' . mysqli_connect_error();  
		}  
		else{    
			$query = "UPDATE donor SET Blood_Type = '".$_POST['blood']."' WHERE DonorID= '".$_POST['donor']."'";   
			$result = mysqli_query($conn,$query);   
			if ($result)   
			{    
				echo 'Update of data completed.';
				header ('Location: /new/admin.html');
			}     
		else
		{    
			echo 'Update error!';   
		}  
	mysqli_close($conn);  
}   
?> 