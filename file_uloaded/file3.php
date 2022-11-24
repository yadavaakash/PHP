<?php
    if(isset($_POST['btnfile'])){
        //Debug Array Data
        // echo "<ore>";
         // print_r($_FILES);
        $filelocation = $_FILES['txt1']['tmp_name'];
        $filedestination = $_FILES['txt1']['name'];
        
        

        if( $_FILES['txt1']['type']=="image/jpeg" || $_FILES['txt1']['type']=="image/jpg" || $_FILES['txt1']['type']=="image/png"){

            move_uploaded_file($filelocation,"upload/".$filedestination);
               echo"succsefully";
        }else{
            echo" NOt succsefully";
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
            File : <input type="file" name ="txt1"/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html>