<?php
    if(isset($_POST['btnfile'])){
        //Debug Array Data
        // echo "<ore>";
        // print_r($_FILES);
       $countfiles = count($_FILES['file']['name']);
        
       for($i = 0; $i < $countfiles; $i++ ){
        $filename = $_FILES['file']['name'][$i];

        move_uploaded_file($_FILES['file']['tmp_name'][$i],"upload/".$filename);
        echo " File Sucsses Uploaded <br>";
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
            File : <input type="file" name ="file[]" multiple/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html>