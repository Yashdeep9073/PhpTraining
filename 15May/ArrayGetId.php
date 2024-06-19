<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    //create connection

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    
    //check connection
    if (!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }else{
        echo "Database Connected";
    }

    // insert data
    $sql = "INSERT INTO users(firstname,lastname,email)
    VALUES('Gurav','Sharma','gkewshama@gmail.com')
    ";

    if (mysqli_query($conn,$sql)) {
        $last_id = mysqli_insert_id($conn); //get id
        echo "New record created successfully. Last inserted ID is:" . $last_id;
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn) ;
    }

    mysqli_close($conn);
?>
