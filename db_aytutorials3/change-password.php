<?php
    session_start();

    require './connection/connection.php';

    // Login Condition
    if(!isset($_SESSION['studentid'])){

        header("location:login.php");

    }

    if($_POST){

        $opass = $_POST['opass'];
        $npass = $_POST['npass'];
        $cpass = $_POST['cpass'];

        $oldpasswordquery = mysqli_query($connection, "select st_password from tbl_student where st_id='{$_SESSION['studentid']}' ");
        $oldpasswordfromdb = mysqli_fetch_array($oldpasswordquery);

        // Old Password Condition
        if($oldpasswordfromdb['st_password'] == $opass){

            // New and Confirm Password Condition
            if($npass == $cpass){

                // Old and New Password Must be Different
                if($opass == $npass){
                    echo "<script>alert('Old and New Password Must be Defferent');</script>";
                }else{
                    $updateq = mysqli_query($connection, "update tbl_student set  st_password='{$npass}' where st_id='{$_SESSION['studentid']}' ");
                    if($updateq){
                        echo "<script>alert('Password Changed');window:location='logout.php';</script>";
                    }
                }


            }else{
                echo "<script>alert('New and Confirm Must be Same');</script>";
            }


        }else{

            echo "<script>alert('Old Password Not Match');</script>";

        }

    }

    

?>

<html>
    <body>
        <form method="post">
            Enter Old Password : <input type="password" name="opass" placeholder="Enter Old Password" required="true">
            <br>
            Enter New Password : <input type="password" name="npass" placeholder="Enter New Passwored" required="true">
            <br>
            Enter Confirm Password : <input type="password" name="cpass" placeholder="Enter Confirm Password" required="true">
            <br>
                <input type="submit">
        </form>
    </body>
</html>