<?php
    require './connection/connection.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $gender = mysqli_real_escape_string($connection, $_POST['gender']);
        $number = mysqli_real_escape_string($connection, $_POST['number']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confinpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
        $photo = "upload/".$_FILES['photo']['name'];

        // Password and Confirm Password
        if($password == $confinpassword){

            $insertquery = mysqli_query($connection, "insert into tbl_student(st_nane, st_gender, st_mobile, st_email , st_password, st_photo) values('{$name}','{$gender}','{$number}','{$email}','{$password}','{$photo}') ");

            // If Query Executed
            if($insertquery){

                // File Upload Code
                $fileprocess = move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

                if($fileprocess){
                    echo "<script>alert('Account Created !');</script>";

                }

            }

        }else{
            echo "<script>alert('Password And Confirm Password Must be Same');</script>";
        }

    }

?>


<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name : <input type="text" name="name" placeholder="Enter Name">
            <br>
            Gender : <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female
            <br>
            Mobile No : <input type="number" name="number" >
            <br>
            Email : <input type="email" name="email">
            <br>
            Password : <input type="password" name="password">
            <br>
            Confirm Password : <input type="password" name="cpassword">
            <br>
            Photo : <input type="file" name="photo">
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>