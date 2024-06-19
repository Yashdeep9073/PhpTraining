<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);   

    if(!$conn){
        die("Connection Failed". mysqli_connect_error());
    }else{
        echo"Database connected";
    }

    

    

?>