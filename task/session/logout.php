<?php
        if(isset($_POST['button1'])){
            $name = $_POST['txt1'];
            session_start();
            if($_SESSION['txt1']=$name){   
                $name = $_SESSION['txt1'];
                $_SESSION['txt1']= $name;
                echo " ".$_SESSION['txt1'];
            }

        }
        if(isset($_POST['button2'])){
            $name = $_POST['txt1'];
            session_start();
                if($_SESSION['txt1']){
                    session_destroy();
                }else{
                    $_SESSION['txt1']= " ";
                    echo " ".$_SESSION['txt1'];
        }
    }    
?>

<html>
    <body>
        <form method="post" action="sesion.php">
            <table>
              
                <tr>
                    <td>
                        
                        <input type="submit" name="button2" value="Logout">
                    </td>
                </tr> 
            </table>
        </form>  
    </body>
</html>