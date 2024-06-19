<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection faied" . mysqli_connect_error());
    }else{
        echo "Database Connected ";
    }


    //creaate create table

    $sql = "CREATE TABLE users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn,$sql)) {
        echo "Table MyGuests created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($conn);

    }
    mysqli_close($conn);

    
?>