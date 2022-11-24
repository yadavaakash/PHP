<?php
    if(isset($_POST['btnfile'])){
        //Debug Array Data
        // echo "<ore>";
         // print_r($_FILES);
       
        
        $countfiles = count($_FILES['txt1']['name']);
        
        for($i = 0; $i < $countfiles; $i++ ){
        if( $_FILES['txt1']['type'][$i]=="image/jpeg" || $_FILES['txt1']['type'][$i]=="image/jpg" || $_FILES['txt1']['type'][$i]=="image/png"){
            $filename = $_FILES['txt1']['name'][$i];
            move_uploaded_file($_FILES['txt1']['tmp_name'][$i],"upload/".$filename);
               echo"File Sucsses Uploaded <br>";
        }else{
            echo" NOt succsefully";
        }
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
            File : <input type="file" name ="txt1[]" multiple/>
            <input type="submit" name="btnfile"/>
        </form>
    </body>
</html>