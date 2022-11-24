<?php

        require './connection/connection.php';

        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $numbere = $_POST['number'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $hobbies = implode(",",$_POST['hobbies']);
            $photo = "upload/".$_FILES['photo']['name'];

            $insertq = mysqli_query($connection, " insert into tbl_student(st_fname, st_lname, st_mobile, st_email, st_password, st_address, st_gender, st_hobbies, st_photo) 
                values('{$fname}','{$lname}','{$numbere}','{$email}','{$password}','{$address}','{$gender}','{$hobbies}','{$photo}') ");

             if($insertq){
                $fileprocess = move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

                if($fileprocess){
                    echo "<script>alert('Record Added');</script>";
                }

             }

        }


?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            First Name : <input type="text" name="fname" required="true" placeholder="Enter First Name">
            <br>
            Last Name : <input type="text" name="lname" required="true" placeholder="Enter Last Name">
            <br>
            Mobile No : <input type="number" name="number" required="true" placeholder="Enter Mobile Number">
            <br>
            Email : <input type="email" name="email" required="true" placeholder="Enter Email Address">
            <br>
            Password : <input type="password" name="password" required="true" placeholder="Enter Your Password">
            <br>
            Address : <textarea name="address" cols="25" rows="4" placeholder="Enter Address"></textarea>
            <br>
            Gender : <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female

            <br>
            Hobbies : <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                      <input type="checkbox" name="hobbies[]" value="Chess">Chess
                      <input type="checkbox" name="hobbies[]" value="Hockey">Hockey
                      <input type="checkbox" name="hobbies[]" value="Kabaddi">Kabaddi
            <br>
            Photo : <input type="file" name="photo" >
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>