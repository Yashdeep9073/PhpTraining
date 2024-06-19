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

    //finding min max values from tables
    $sql = "SELECT min(price) AS min_value FROM products";
    // $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        echo "Minivalue is:" . $row["min_value"];
    }
    

?>