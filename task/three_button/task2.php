<?php
    if(isset($_POST['minimum'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];
        $name3 = $_POST['text3'];
        $name4 = $_POST['text4'];
        $name5 = $_POST['text5'];
        $name6 = $_POST['text6'];
        $name7 = $_POST['text7'];
        $name8 = $_POST['text8'];
        $name9 = $_POST['text9'];
        $name10 = $_POST['text10'];

        
        echo min($name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10);
    }

    if(isset($_POST['maxmum'])){
        $name1 = $_POST['text1'];
        $name2 = $_POST['text2'];
        $name3 = $_POST['text3'];
        $name4 = $_POST['text4'];
        $name5 = $_POST['text5'];
        $name6 = $_POST['text6'];
        $name7 = $_POST['text7'];
        $name8 = $_POST['text8'];
        $name9 = $_POST['text9'];
        $name10 = $_POST['text10'];

        
        echo max($name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10);
    }
?>

<html>
<body>
    <form method="post">
        <table>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text1" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text2" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text3" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text4" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text5" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text6" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text7" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text8" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text9" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="number" name="text10" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name= "minimum" value="minimum" />
                    <input type="submit" name= "maxmum" value="maxmum" />
                </td>
            </tr>    
        </table>
    </form>
</body>
</html>