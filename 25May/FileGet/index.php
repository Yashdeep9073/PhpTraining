<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //get sigle line
        $myfile = fopen("webdictionary.txt","r") or die("Unable to open file");
        echo fgets( $myfile );
        
        fclose( $myfile );
    ?>
</body>
</html>