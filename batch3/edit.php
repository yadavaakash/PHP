<?php
    require "./connection/batch3.php";
    
        $id = $_GET['eid'];


        $fetchq = mysqli_query($connection, "select * from tbl_student where st_id='{$id}' ") or die(mysqli_error($connection));
        $row = mysqli_fetch_array($fetchq);
            


        if (isset($_POST['submit'])){
            
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

            
            $queryeid = mysqli_query($connection, "update tbl_student set st_fname='{$fname}', st_lname='{$lname}', st_color='{$color}', st_gender='{$gender}', st_password='{$password}', st_address='{$address}', st_product='{$product}', st_photo='{$photo}', st_price='{$price}', st_date='{$date}' where st_id='{$id}' ");
            if($queryeid){
                $file = move_uploaded_file($_FILES['photo']['tmp_name'],$photo);       
            }

           
            header("location:display.php");
    }

?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            
            <br>
            First Name : <input type="text" name="fname" value="<?php echo $row['st_fname'] ?>" />
            <br>
            Last Name : <input type="text" name="lname" value = "<?php echo $row['st_lname']; ?>" />
            <br>
            Color : <input type="color" name="color" value = "<?php echo $row['st_color']; ?>" />
            <br>
            Gender : <input type="radio" name="gender"  value = "<?php echo $row['st_gender']; ?>" />Male
                     <input type="radio" name="gender"  value = "<?php echo $row['st_gender']; ?>" />Female
            <br> 
            Password : <input type="password" name="password" value= "<?php echo $row['st_password']; ?>" />
            <br>
            Address : <textarea name="address" cols="30" rows="10" value = "<?php echo $row['st_address']; ?>"></textarea>
            <br>
            Product : <input type="text" name="product" value = "<?php echo $row['st_product']; ?>" />
            <br>
            Photo : <input type="file" name="photo"value = "<?php echo $row['st_photo']; ?>" />
            <br>
            Price : <input type="text" name="price" value= "<?php echo $row['st_price']; ?>" />
            <br>
            Date : <input type="date" name="date" value = "<?php echo $row['st_date']; ?>" />
            <br>
            <br>
            <input type="submit" name="submit"> 
        </form>
    </body>
</html>