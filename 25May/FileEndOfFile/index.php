<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $myfile = fopen("dic.txt","r") or die("Unable to open files");
        
    while(!feof($myfile)){
        // echo fgets($myfile) . "<br>";
        echo fgetc($myfile) . "<br>";
    }
    fclose( $myfile );
?>
    
</body>
</html>