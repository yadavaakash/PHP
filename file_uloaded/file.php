<?php
    if(isset($_POST['btnfile'])){
        //Debug Array Data
        // echo "<ore>";
        print_r($_FILES);
        $filelocation = $_FILES['txt1']['tmp_name'];
        $filedestination = $_FILES['txt1']['name'];

        $a = move_uploaded_file($filelocation,"upload/".$filedestination);

        if($a){
            echo "Upload Sucsses Fully";
        }

    }
?>    
<html>
    <head>

    </head>
    <body>
        <!-- FileUpload : 
        MEthod : POST
        enctype : 'multipart/form-data' -->
        <form method="post" enctype='multipart/form-data'>
            File : <input type="file" name ="txt1" multiple/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html>