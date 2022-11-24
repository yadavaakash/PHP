<?php
    if(isset($_POST['button'])){
        $name1 = $_POST['txt1'];
        $name2 = $_POST['txt2'];

        echo similar_text($name1,$name2,$per);  
        echo "<br> Same Value In % $per";
         
    }
?>

<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>
                        First Name : <input type="text" name="txt1"/> 
                        First Name : <input type="text" name="txt2"/> 
                    </td> 
                </tr>
                <tr>
                    <td>
                        button : <input type="submit" name="button" value="Click Me">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>