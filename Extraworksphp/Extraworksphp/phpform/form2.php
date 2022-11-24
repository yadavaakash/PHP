<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration Form</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
		<form method="post" bordercolor="#fff">
			<table border="1" width="60%" align="center" cellpadding="5" cellspacing="5" bordercolor="#501c73">
				<tr bgcolor="#f8f446"  align="center">
					<th colspan="2"><font size="5">User Form</font></th>
				</tr>
				<tr bgcolor="#99b1fe" bordercolor="red">	
					<th align="justify">Enter Name  </th>
					<td>
						<input type="text" name="name" size="69" placeholder="Enter your Name" style="background-color:#77f9cc;" />
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th align="justify">Enter Password   </th>
					<td>
						<input type="password" name="password" placeholder="Enter Your Password" size="69" style="background-color:#77f9cc;"/>
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th valign="top" align="justify">Enter Address   </th>
					<td>
						<textarea  name="address" placeholder="Enter Address" style="background-color:#77f9cc; text-align:justify; width:520px; height:70px;" ></textarea>
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th valign="top" align="justify">Select Game  </th>
					<td>
						<input type="checkbox" name="hobbies[]" value="hockey" >Hockey<br/>
						<input type="checkbox" name="hobbies[]" value="football">Football<br/>
						<input type="checkbox" name="hobbies[]" value="badminton">Badminton<br/>
						<input type="checkbox" name="hobbies[]" value="cricket">Cricket<br/>
						<input type="checkbox" name="hobbies[]" value="volleyball">Volleyball<br/>
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th align="justify" >Gender</th>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th align="justify">Select Age </th>
					<td >
						<select name="age" style="background-color:#77f9cc; width:500px;">
							<option value="">-Select-</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
						</select>	
					</td>
				</tr>
				<tr bgcolor="#99b1fe">
					<th align="justify" >Birthday</th>
					<td>
						<input type="datetime-local" name="datetime	" style="background-color:#77f9cc;"/>
					</td>
				</tr>
				<tr bgcolor="#99b1fe" align="center"s>
					<th   colspan="2" >
						<input type="file" name="file" style="background-color:#77f9cc;" />
					</th>
				</tr>
				<tr bgcolor="#99b1fe">
					<td colspan="2" align="center">
						<input type="button" name="button" size="20" value="Click Me" style="background-color:#77f9cc; padding:7px 80px;"  />
						<input type="button" name="button" size="20" value="Reset" style="background-color:#77f9cc; padding:7px 80px;" />
						<input type="submit" name="submit"  size="20" value="Submit Form" style="background-color:#77f9cc; padding:7px 80px;" />
					</td>
				</tr>
			</table>
		</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>