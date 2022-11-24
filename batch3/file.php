<?php
    require "./connection/batch3.php";

    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $color = $_POST['color'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $product = $_POST['product'];
        $photo = "upload/".$_FILES['photo']['name'];
        $price = $_POST['price'];
        $date = $_POST['date'];


        $insertquery  = mysqli_query($connection, "insert into tbl_student(st_fname, st_lname, st_color, st_gender, st_password, st_address, st_product, st_photo, st_price, st_date)  
            values('{$fname}','{$lname}','{$color}','{$gender}','{$password}','{$address}','{$product}','{$photo}','{$price}','{$date}') ");

            if($insertquery){
                $fileprocess = move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

                if($fileprocess){
                    echo "<script>alert('Record Added !');</script>";
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
            Color : <input type="color" name="color">
            <br>
            Gender : <input type="radio" name="gender" value="Male">Male
                     <input type="radio" name="gender" value="Female">Female
            <br> 
            Password : <input type="password" name="password">
            <br>
            Address : <textarea name="address"  cols="30" rows="10"></textarea>
            <br>
            Product : <input type="text" name="product">
            <br>
            Photo : <input type="file" name="photo">
            <br>
            Price : <input type="text" name="price">
            <br>
            Date : <input type="date" name="date">
            <br>
            <br>
            <input type="submit" name="submit"> 
        </form>
    </body>
</html>