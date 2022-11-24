<?php
    if(isset($_POST['button1'])){
        $name = $_POST['txt1'];

        echo strlen($name);
    }
    if(isset($_POST['button2'])){
        $name = $_POST['txt1'];

        echo strtoupper($name);
    }
    if(isset($_POST['button3'])){
        $name = $_POST['txt1'];

        echo strtolower($name);
    }
    if(isset($_POST['button4'])){
        $name = $_POST['txt1'];

        echo ucfirst($name);
    }
    if(isset($_POST['button5'])){
        $name = $_POST['txt1'];

        echo strtoupper($name);
    }
    if(isset($_POST['button6'])){
        $name = $_POST['txt1'];

        echo strrev($name);
    }
?>
<html>
    <body>
        <form method="post">
            <table>
            <tr>
                <td>
                    Enter Value : <input type="text" name="txt1" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="button1" value="Total Character" />
                    <input type="submit" name="button2" value="Capital" />
                    <input type="submit" name="button3" value="Lowercase" />
                    <input type="submit" name="button4" value="Upper First Word" />
                    <input type="submit" name="button5" value="Upper All word" />
                    <input type="submit" name="button6" value="Reverse" />
                </td>    
            </tr>
            </table>
        </form>
    </body>
</html>