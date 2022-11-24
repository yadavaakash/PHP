<?php

    session_start();

    require './connection/connection.php';

    if($_POST){
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        $selectquery = mysqli_query($connection, "select * from tbl_student where st_email='{$email}' and st_password='{$password}' ");
        $count = mysqli_num_rows($selectquery);
        $row = mysqli_fetch_array($selectquery);

        if($count>0){

            $_SESSION['studentid'] = $row['st_id'];
            $_SESSION['studentname'] = $row['st_nane'];

            header("location:home.php");

        }else{
            echo "<script>alert('Email and Password Not Match. ');</script>";
        }
        
    


    }

?>


<html>
    <body>
        <form method="post">
            Enter Email : <input type="email" name="email" required="true" placeholder="Enter Email">
            <br>
            Password :    <input type="password" name="password" required="true" placeholder="Enter Password">
            <br>
            <input type="submit" value="Login">

        </form>
    </body>
</html>