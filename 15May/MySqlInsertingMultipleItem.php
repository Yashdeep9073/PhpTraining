<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //connection

    if (!$conn) {
        die("Error while connecting" . mysqli_connect_error($conn));
    }else{
        echo "<h1>Database Connected !!!!</h1>";
    };

    $sql = "INSERT INTO users (firstname,lastname,email)
    VALUES('one','deep','one@one.com');
    ";
    $sql .= "INSERT INTO users (firstname,lastname,email)
    VALUES('two','preet','two@two.com');
    ";
    $sql .= "INSERT INTO users (firstname,lastname,email)
    VALUES('three','singh','three@three.com');
    ";

    if (mysqli_multi_query($conn,$sql)) {
        echo "New records are successfully created"; 
    }else{
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>