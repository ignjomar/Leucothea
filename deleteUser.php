<?php
	$conn = mysqli_connect('localhost','root','','leucothea');  
	
	if(mysqli_connect_error()){   
		echo 'MySQL Error: ' . mysqli_connect_error();  
	}  
	
	else{
		$query = "DELETE FROM user WHERE UserID = '".$_POST['userID']."'";
		$result = mysqli_query($conn, $query);
        
        if($result)
        {
           if(mysqli_affected_rows($conn) > 0)
            {
				echo "<script type = 'text/javascript'>alert('Data Deleted'); window.location.href = '/new/admin.html';</script>";
            }
			
			else{
				echo "<script type = 'text/javascript'>alert('Data Not Deleted'); window.location.href = '/new/admin.html';</script>";
            }
        }
    } 
?>