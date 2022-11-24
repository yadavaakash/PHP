<?php
	include "include/connection.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Display Record</title>
	</head>
	<body>
		<table border="1" cellpadding="10" cellspacing="0" align="center">
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Password</td>
				<td>Gender</td>
				<td>Address</td>
				<td>City</td>
				<td>Photo</td>
				<td>Hobbies</td>
				<td>Action</td>
			</tr>
			<?php
				$qry = "select * from register";
				$res = mysqli_query($conn,$qry);
				
				while($row = mysqli_fetch_assoc($res)){
			?>
			<tr>
				<td><?php echo $row["id"] ?></td>
				<td><?php echo $row["firstname"] ?></td>
				<td><?php echo $row["lastname"] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["password"] ?></td>
				<td><?php echo $row["gender"] ?></td>
				<td><?php echo $row["address"] ?></td>
				<td><?php echo $row["city"] ?></td>
				<td>
					<?php
						if($row["photo"]!=""){
					?>
						<img src="uploads/<?php echo $row["photo"]; ?>" width="200" />
					<?php
						}
					?>
				</td>
				<td><?php echo $row["hobbies"] ?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>