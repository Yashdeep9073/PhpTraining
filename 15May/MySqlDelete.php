<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";


    //connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection Error:" . mysqli_connect_error());
    }else{
        echo "<h1>Database connected</h1>";
    }

    //sql delete a record
    $sql = "DELETE FROM users WHERE id = 21 ";

    if (mysqli_query($conn,$sql)) {
        echo "Deleted Successfully";
    }else{
        echo "Something went wrong deleting from daatabase";
    }

    mysqli_close($conn);


?>