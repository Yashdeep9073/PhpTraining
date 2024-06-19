<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connection Error ! :" . mysqli_connect_error());
    }else{
        echo "Database connceted !!";
    }

    $sql = "SELECT id, firstname , lastname,email FROM users
    WHERE email = 'ydeep9073@gmail.com'
    ";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0 ){
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"] . "- Name " . $row["firstname"] . "" . $row["lastname"] . " , Email:" . $row["email"] . "<br>" ;
        }
    }else{
        echo "0 results";
    }

    mysqli_close($conn);
    
?>