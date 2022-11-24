<?php
    if(isset($_POST['btnfile'])){
        //Debug Array Data
        // echo "<ore>";
        // print_r($_FILES);
        $filelocation = $_FILES['txt1']['tmp_name'];
        $filedestination = $_FILES['txt1']['name'];
        


        if($filedestination < 2097152){
                 move_uploaded_file($filelocation,"upload/".$filedestination);
                    echo "File Sucsses Fully  Uploded ";
                }else{
                    echo "The size of the file must be less than 2MB in order to be uploded";

                }
                return false;
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