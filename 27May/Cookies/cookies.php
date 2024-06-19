<?php
    $cookie_name = "user";
    $cookie_value = "Yashdeep";
    
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30),  "/"); //86400 = 1 day
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo"Cookie named ". $cookie_name." is not set !";
        }else{
            echo "Cookie ".$cookie_name ." is set ! <br>";
            echo "Values is ".$_COOKIE[$cookie_value];
        }
    ?>
</body>
</html>