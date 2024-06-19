<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die ("Connection Error :" . mysqli_connect_error());
    }else{
        echo "<h1>Database Connected</h1>";
    }

    //inserting data
    $sql = "INSERT INTO users(firstname,lastname,email)
    VALUES('Yash','deep','ydeep9073@gmail.com')";

    if (mysqli_query($conn,$sql)) {
        echo "New record created successfully ";
    }else{
        echo "Error :" . $sql . "<br>" .mysqli_error($conn);
    }

    mysqli_close($conn);
?>