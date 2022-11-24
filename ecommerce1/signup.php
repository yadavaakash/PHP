<?php
    require './connection/connection.php';

   if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($connection,$_POST['name']);
        $gender = mysqli_real_escape_string($connection, $_POST['gender']);
        $number = mysqli_real_escape_string($connection, $_POST['number']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $photo = "upload/". $_FILES['photo']['name'];

        $insertquery = mysqli_query($connection, "insert into tbl_student(st_name, st_gender, st_number, st_email, st_password, st_photo) 
         values ('{$name}','{$gender}','{$number}','{$email}','{$password}','{$photo}') "); 

         if($insertquery){
            $fileprocess = move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

            if($fileprocess){

                echo "<script>alert('Account Created !');</script>";

            }

         }

   }

?>


<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name : <input type="text" name="name" required="true" placeholder="Enter Your Name">
            <br>
            Gender : <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female
            <br>
            Mobile No : <input type="number" name="number" required="true" placeholder="Enter Your Mobile Number">
            <br>
            Email : <input type="email" name="email" required="true" placeholder="Enter Your Email">
            <br>
            Password : <input type="password" name="password" required="true" placeholder="Enter Your Password">
            <br>
            Photo : <input type="file" name="photo">
            <br>
            <input type="submit"  name="submit" value="SignUp">
        </form>
    </body>
</html>