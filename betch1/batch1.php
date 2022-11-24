<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "batch1";

    $connection =  mysqli_connect($hostname,$username,$password, $database);

    if($_POST){
        $name = $_POST['txt1'];
        $gender = $_POST['txt2'];
    

    $query = mysqli_query($connection, "insert into tbl_student (st_name, st_gender) values('{$name}','{$gender}') ");

    if($query){
        echo "<script>alert('Record Added');</script>";
    }
}
?>

<html>
    <body>
        <form method="post">
            Name : <input type="text" name="txt1">
            Gender : <input type="text" name="txt2">
            <input type="submit">
        </form>
    </body>
</html>