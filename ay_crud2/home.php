<?php

require './connection/connection.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $hobbies = implode($_POST['hobbies']);
    $photo = "upload/" . $_FILES['photo']['name'];

    $query = mysqli_query($connection, "insert into tbl_student(st_fname, st_lname, st_number, st_email, st_password, st_address, st_gender, st_hobbies, st_photo) values('{$fname}','{$lname}','{$number}','{$email}','{$password}','{$address}','{$gender}','{$hobbies}','{$photo}') ");

     if($query){
        $process = move_uploaded_file($_FILES['photo']['tmp_name'] , $photo );

        if($process){
            echo "<script>alert('Record Added');</script>";
        }

     }
   
}


?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            First Name : <input type="text" name="fname" placeholder="Enter First Name">
            <br>
            Last Name : <input type="text" name="lname" placeholder="Enter Last Name">
            <br>
            Mobile No  : <input type="number" name="number" placeholder="enter Mobile Number">
            <br>
            Email      : <input type="email" name="email" placeholder="Enter Email">
            <br>
            Password   : <input type="password" name="password" placeholder="Enter Password">
            <br>
            Address    : <textarea name="address" cols="20" rows="6" placeholder="Enter Address"></textarea>
            <br>
            Gender     : <input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Female">Female
            <br>
            Hobbies    :    <input type="checkbox" name="hobbies[]" value="hockey" >Hockey
                            <input type="checkbox" name="hobbies[]" value="football">Football
                            <input type="checkbox" name="hobbies[]" value="badminton">Badminton
                            <input type="checkbox" name="hobbies[]" value="cricket">Cricket
                            <input type="checkbox" name="hobbies[]" value="volleyball">Volleyball
            <br>
            Photo : <input type="file" name="photo">
            <br>
            <br>
            Submit Button : <input type="submit" name="submit">
        </form>
    </body>
</html>