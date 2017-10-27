<?php
		$conn = mysqli_connect('localhost','root','','leucothea');
		
		$isConnected = false;
		
		if(mysqli_connect_errno()){
			echo 'MYSQL Error: '  . mysqli_connect_error();
		}
		else{
			$query = "SELECT * FROM user";
					$result = mysqli_query($conn,$query);
						if ($result){
							echo "<table border='1'>
								<thead>
								<td>UserID</td>
								<td>Username</td>
								<td>Password</td>
								<td>First Name</td>
								<td>Middle Name</td>
								<td>Last Name</td>
								</thead>";
							while($row = mysqli_fetch_row($result)){
						echo "<tr>"; echo "<td>$row[0]</td>";
					echo "<td>$row[1]</td>"; echo "<td>$row[2]</td>";echo "<td>$row[3]</td>";echo "<td>$row[4]</td>";echo "<td>$row[5]</td>";
				echo "</tr>";
		}
	}
}
