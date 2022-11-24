<?php
     require './connection/connection.php';
    
        $id = $_GET['eid'];


        $fetchq = mysqli_query($connection, "select * from tbl_student where st_id='{$id}' ") or die(mysqli_error($connection));
        $row = mysqli_fetch_array($fetchq);
        


        if(isset($_POST['submit'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $hobbies = implode(",",$_POST["hobbies"]);
            $photo = "upload/".$_FILES['photo']['name'];

            
            $queryeid = mysqli_query($connection, "update tbl_student set st_fname='{$fname}', st_lname='{$lname}', st_mobile='{$number}', st_email='{$email}', st_password='{$password}', st_address='{$address}', st_gender='{$gender}', st_hobbies='{$hobbies}', st_photo='{$photo}' where st_id='{$_GET['eid']}' ");
            if($queryeid){
                $file = move_uploaded_file($_FILES['photo']['tmp_name'],$photo);       
            }

           
            header("location:display.php");
    }

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            First Name : <input type="text" name="fname" value="<?php echo $row['st_fname'] ?>" />
            <br>
            Last Name : <input type="text" name="lname" value = "<?php echo $row['st_lname'] ?>" />
            <br>
            Mobile : <input type="number" name="number" value = "<?php echo $row['st_mobile'] ?>" />
            <br>
            Email : <input type="email" name="email" value= "<?php echo $row['st_email'] ?>" />
            <br>
            Password : <input type="password" name="password" value = "<?php echo $row['st_password'] ?>" />
            <br>
            Address : <textarea name="address" cols="20" rows="4"><?php echo $row['st_address']?></textarea>
            <br>
            Gender : <input type="radio" name="gender"  value = "<?php echo $row['st_gender'] ?>" />Male
                     <input type="radio" name="gender"  value = "<?php echo $row['st_gender'] ?>" />Female
            <br> 
            Hobbies :   <input type="checkbox" name="hobbies[]" value = "<?php echo $row['st_hobbies'] ?>" >Hockey
						<input type="checkbox" name="hobbies[]" value = "<?php echo $row['st_hobbies'] ?>">Football
						<input type="checkbox" name="hobbies[]" value = "<?php echo $row['st_hobbies'] ?>">Badminton
						<input type="checkbox" name="hobbies[]" value = "<?php echo $row['st_hobbies'] ?>">Cricket
						<input type="checkbox" name="hobbies[]" value = "<?php echo $row['st_hobbies'] ?>">Volleyball
            <br>
            Photo : <input type="file" name="photo" value ="<?php echo $row['st_photo'] ?>" />
            <br>
            <br>
            <input type="submit" name="submit"> 
        </form>
    </body>
</html>