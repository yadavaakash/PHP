<?php
    require './connection/connection.php';

    
    $eid = $_GET['eid'];
        $fetchq = mysqli_query($connection, "select * from tbl_student where st_id='{$eid}' " );
        $row = mysqli_fetch_array($fetchq);

        if(isset($_POST['submit'])){
    
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $gender = mysqli_real_escape_string($connection, $_POST['gender']);
            $number = mysqli_real_escape_string($connection, $_POST['number']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $photo = "upload/".$_FILES['photo']['name'];

            $queryupdate = mysqli_query($connection, "update tbl_student set st_nane='{$name}',st_gender='{$gender}',st_mobile='{$number}',st_email='{$email}',st_password='{$password}',st_photo='{$photo}' where st_id='{$eid}' ");

            if($queryupdate){
                move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
                
            }
            header("location:view.php");

        }
    

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Enter Name : <input type="text" name="name" value="<?php echo $row['st_nane'] ?>">
            <br>
            Gender : <input type="radio" name="gender" value="<?php echo $row['st_gender'] ?>">Male
                     <input type="radio" name="gender" value="<?php echo $row['st_gender'] ?>">Female
            <br>
            Mobile No : <input type="number" name="number" value="<?php echo $row['st_mobile'] ?>">
            <br>
            Email: <input type="email" name="email" value="<?php echo $row['st_email'] ?>">
            <br>
            Password : <input type="password" name="password" value="<?php echo $row['st_password'] ?>">
            <br>
            Photo : <input type="file" name="photo" value="<?php echo $row['st_photo'] ?>">
            <br>
            <br>

                <input type="submit" name="submit">
        </form>
    </body>
</html>