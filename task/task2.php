<?php
        if(isset($_POST['button'])){
            $name1 = $_POST['txt1'];
            $name2 = $_POST['txt2'];

            

            $name1 = "$name1";
            echo md5($name1),"<br>";

            $name2 = "$name2";
            echo sha1($name2),"<br>";
        }
?>
<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>
                        Enter Md5 : <input type="text" name="txt1" placeholder=" Enter Md5 " />
                        Enter Sha1 : <input type="text" name="txt2" placeholder=" Enter Sha1 " />
                    </td>
                </tr>
                <tr>
                    <td>
                        Button : <input type="submit" name="button" value="Click Me" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>