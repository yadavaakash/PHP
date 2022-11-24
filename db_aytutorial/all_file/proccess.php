<?php
   
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];

        echo "My Name is $name and Gender is $gender";
    
        $connection = mysqli_connect("localhost","root","","db_aytutorial");
        $query = mysqli_query($connection,"insert into tbl_student(st_name,st_gender) values('$name','$gender')") or die("Error". mysqli_error($connection));
     
        if($query){
            echo "<script> alert('Record Added');</script>";
        }
?>