<?php
    if(isset($_POST['button'])){
        $name1 = $_POST['txt1'];
        $name2 = $_POST['txt2'];

        
        echo str_replace($name1," Yadav ",$name2); 
    }
?>

<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>
                        First Value : <input type="text" name="txt1"/>
                        Second Value : <input type="text" name="txt2"/>
                    </td>    
                </tr>
                <tr>
                    <td>
                        Boutton : <input type="submit" name="button" value="Click Me"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>