<?php
	if(isset($_POST["addrecord"])){
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$gender = $_POST["gender"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		
		$hobbies = implode(",",$_POST["hobbies"]);
		$photo = $_FILES["photo"];
		
		$newname = time().$photo["name"];
		
		if(move_uploaded_file($photo["tmp_name"],"uploads/".$newname)){
			$sql = "insert into register (firstname,lastname,email,password,gender,address,city,hobbies,photo) 
			values('$firstname','$lastname','$email','$password','$gender','$address','$city','$hobbies','$newname')";
		}else{
			$sql = "insert into register (firstname,lastname,email,password,gender,address,city,hobbies) 
			values('$firstname','$lastname','$email','$password','$gender','$address','$city','$hobbies')";
		}
		
		if(mysqli_query($conn,$sql)){
			echo "Record Inserted";
		}else{
			echo "Record Not Inserted";
		}
	}
?>