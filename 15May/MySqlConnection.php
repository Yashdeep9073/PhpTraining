<?php

$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "test";

//create connection 
$conn = mysqli_connect($servername,$username,$password);

if (!$conn) {
    die("Connection Failed :".mysqli_connect_errno());
}else{
    echo "DbConnected Successfully";
}


//create database
$sql = "CREATE DATABASE sample";
if (mysqli_query($conn,$sql)) {
    echo "Database created successful";
}else{
    echo "error creating database:" . mysqli_error($conn);
}

mysqli_close($conn);


?>