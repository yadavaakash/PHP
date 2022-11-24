<?php
	include "include/connection.php";
	include "add-record-db.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<table border="0" align="center">
				<tr>
					<td>Enter First Name</td>
					<td>
						<input type="text" name="firstname" placeholder="Enter Your First Name" size="20" maxlength="10" />
					</td>
				</tr>
				<tr>
					<td>Enter Last Name</td>
					<td>
						<input type="text" name="lastname" placeholder="Enter Your Last Name" size="20" maxlength="20" />
					</td>
				</tr>
				<tr>
					<td>Enter Email Id</td>
					<td>
						<input type="email" name="email" placeholder="Enter Your Email" size="50" maxlength="100" />
					</td>
				</tr>
				<tr>
					<td>Enter Password</td>
					<td>
						<input type="password" name="password" placeholder="Enter Your Password" size="50" maxlength="50" />
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="Male" /> Male
						<input type="radio" name="gender" value="Female" /> Female
						
					</td>
				</tr>
				<tr>
					<td valign="top">Address</td>
					<td>
						<textarea rows="6" cols="50" name="address" placeholder="Enter Your Address"></textarea>
					</td>
				</tr>
				<tr>
					<td valign="top">City</td>
					<td>
						<select name="city">
							<option value="">-Select-</option>
							<?php
								foreach($city as $v){
							?>
							<option value="<?php echo $v; ?>"><?php echo $v; ?></option>
							<?php
								}
							?>							
						</select>
					</td>
				</tr>
				<tr>
					<td>Select Your Photo</td>
					<td>
						<input type="file" name="photo" />
					</td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>
						<input type="checkbox" name="hobbies[]" value="cricket" /> Cricket
						<input type="checkbox" name="hobbies[]" value="hockey" /> Hockey
						<input type="checkbox" name="hobbies[]" value="chess" /> Chess
						<input type="checkbox" name="hobbies[]" value="football" /> Football
						<input type="checkbox" name="hobbies[]" value="kabaddi" /> Kabaddi
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="addrecord" value="Submit" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
