<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// /The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.

$myfileW = fopen("testfile.txt","w") or die("Unable to open file");
$myfileR = fopen("testfile.txt","r") or die("Unable to open file");
$myfileA = fopen("testfile.txt","a") or die("Unable to open file");

$txt = "Yashdeep\n";
fwrite( $myfileW, $txt );

$txt = "Guran\n";
fwrite( $myfileW, $txt );

$txt = "Goofy";
fwrite( $myfileA, $txt );

echo fread( $myfileR, filesize("testfile.txt"));

fclose( $myfileW );

?>

</body>
</html>

