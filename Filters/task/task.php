<?php

if($_POST){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $ipaddress = $_POST['ipaddress'];
    $websiteurl = $_POST['websiteurl'];

    $sanitizename = filter_var($name, FILTER_SANITIZE_STRING);
    echo $sanitizename;
    echo "<br>";
   
        if(filter_var($number, FILTER_VALIDATE_INT)){
                echo "The <b>$number</b> is a valid integer";
            } else{
                echo "The <b>$number</b> is not a valid integer";
            }
    echo "<br>";        
            // Remove all illegal characters from email
            $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
            // Validate email address
            if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "The $email is a valid email address";
            } else{
                echo "The $email is not a valid email address";
            }
    echo "<br>";    
            // Validate sample IP address
            if(filter_var($ipaddress, FILTER_VALIDATE_IP)){
                    echo "The <b>$ipaddress</b> is a valid IP address";
                } else {
                    echo "The <b>$ipaddress</b> is not a valid IP address";
                }
    echo "<br>"; 
                // Remove all illegal characters from url
                $sanitizedUrl = filter_var($websiteurl, FILTER_SANITIZE_URL);
                // Validate website url
                if($websiteurl == $sanitizedUrl && filter_var($websiteurl, FILTER_VALIDATE_URL)){
                    echo "The $websiteurl is a valid website url";
                } else{
                    echo "The $websiteurl is not a valid website url";
                }
    
          

}


?>

<html>
    <body>
        <form method="post">
            Enter Name : <input type="text" name="name" required="true" placeholder="Enter Name">
            <br>
            Mobile No : <input type="number" name="number" required="true" placeholder="Mobile Number">
            <br>
            Email : <input type="email" name="email" required="true" placeholder="Enter Email">
            <br>
            IPAddress : <input type="text" name="ipaddress" required="true" placeholder="Enter IPAddress">
            <br>
            Website URL : <input type="text" name="websiteurl" required="true" placeholder="Enter Website URL">
            <br>
            <input type="submit">
        </form>
    </body>
</html>