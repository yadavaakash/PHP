<form method="post">
    programming :
    c<input type="checkbox" name="cbox[]" value="c"  />
    c++<input type="checkbox" name="cbox[]" value="c++"  />
    PHP<input type="checkbox" name="cbox[]" value="PHP"  />

    <input type="submit">
</form>

<?php
    if($_POST){
        $programming = $_POST['cbox'];
        $string = implode(",",$programming);
        echo $string;
    }
?>