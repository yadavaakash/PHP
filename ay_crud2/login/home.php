<?php

        session_start();

        $connection = mysqli_connect("localhost","root","","ay_crud2");

        if($_POST){

            $email = $_POST['email'];
            $password = $_POST['password']; 

            $selectq = mysqli_query($connection, "select * from tbl_student where st_email='{$email}' and st_password='{$password}' ");
            $count = mysqli_num_rows($selectq);
            $row = mysqli_fetch_array($selectq);

            if($count>0){
                $_SESSION['studentid'] = $row['st_id'];
                $_SESSION['studentname'] = $row['st_name'];

                header("location:home.php");


            }else{
                echo "<script>alert('Email and Password Not Match.');<script>";
            }

        }


?>


<html>
    <body>
            <form method="post">

                Email    : <input type="email" name="email" required="true" placeholder="Enater Email">
                <br>
                <br>
                Password : <input type="password" name="password" required="true"placeholder="Enater Password" >
                <br>
                 <br> Login Button : <input type="submit" value="Login">
            </form> 
    </body>
</html>