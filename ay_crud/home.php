<?php

    $connection = mysqli_connect("localhost","root","","ay_crud");

    if(isset($_POST['submit'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $gender = $_POST['txt'];
        $checkbox = implode(",",$_POST["hobbies"]);
        $photo = "upload/".$_FILES['photo']['name'];
        

        $query = mysqli_query($connection, " insert into tbl_student(st_fname, st_lname, st_mobile, st_email, st_password, st_address, st_gender, st_hobbies, st_photo) 
            values('{$fname}', '{$lname}', '{$number}', '{$email}', '{$password}', '{$address}', '{$gender}', '{$checkbox}','{$photo}' )");


            if($query){
                $process = move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

                if($process){
                    echo "<script>alert('Record Added');</script>";
                }

            }
    }


?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            First Name : <input type="text" name="fname" placeholder="Enter First Name" required="true">
            <br>
            <br>
            Last Name : <input type="text" name="lname" placeholder="Enter First Name" required="true">
            <br>
            <br>
            Mobile No. : <input type="number" name="number" placeholder="Enter Number" required="true">
            <br>
            <br>
            Email     : <input type="email" name="email" placeholder="Enter Email" required="true">
            <br>
            <br>
            Password : <input type="password" name="password" placeholder="Enter Password" >
            <br>
            <br>
            Address : <textarea name="address"  cols="20" rows="6" placeholder="Enter Address"></textarea>
            <br>
            <br>
            Gender : <input type="radio" name="txt" value="Male" required="true">Male
                     <input type="radio" name="txt" value="Male" required="true">Female
            <br>
            <br>
            Hobbies :   <input type="checkbox" name="hobbies[]" value="hockey" >Hockey
						<input type="checkbox" name="hobbies[]" value="football">Football
						<input type="checkbox" name="hobbies[]" value="badminton">Badminton
						<input type="checkbox" name="hobbies[]" value="cricket">Cricket
						<input type="checkbox" name="hobbies[]" value="volleyball">Volleyball
            <br>
            <br>
            Photo   : <input type="file" name="photo">
            <br>
            <br>
            <input type="submit" name="submit">

        </form>
    </body>
</html>