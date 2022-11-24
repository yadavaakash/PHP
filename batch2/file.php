<?php
    require './connection/connection.php';

    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $address = $_POST['address'];
        $gender = $_POST['txt1'];
        $hobbies = implode($_POST['hobbies']);
        $photo = "upload/". $_FILES['photo']['name'];
        $city = $_POST['city'];

        $query = mysqli_query($connection, " insert into tbl_student(st_fnane, st_lname, st_number, st_email, st_password, st_address, st_gender, st_hobbies, st_photo, st_city) 
        values('{$fname}', '{$lname}', '{$number}', '{$email}', '{$password}', '{$address}', '{$gender}', '{$hobbies}', '{$photo}', '{$city}' )");


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
            First Name : <input type="text" name="fname">
            <br>
            Last Name : <input type="text" name="lname">
            <br>
            Number : <input type="text" name="number">
            <br>
            Email : <input type="text" name="email">
            <br>
            Password : <input type="password" name="password">
            <br>
            Address : <textarea name="address" cols="25" rows="5"></textarea>
            <br>
            Gender : <input type="radio" name="txt1" value="Male">Male
             <input type="radio" name="txt1" value="Female">Female
            <br>
            Hobbies : <input type="checkbox" name="hobbies[]" value="Cricket">Cricket
                      <input type="checkbox" name="hobbies[]" value="Chess">Chess
                      <input type="checkbox" name="hobbies[]" value="Hockey">Hockey
                      <input type="checkbox" name="hobbies[]" value="kabaddi">kabaddi
                      <input type="checkbox" name="hobbies[]" value="Football">Football
            <br>
            Photo : <input type="file" name="photo">
            <br>
            Select : <select name="city">
                <option value="">-Select-</option>
                <option>Ahmedabad</option>
                <option>Baroda</option>
                <option>Gandhinagar</option>
                <option>Surat</option>
                <option>Rajkot</option>
            </select>
            <br>
            <br>
            <input type="submit" name="submit">
        </form>    
    </body>
</html>

