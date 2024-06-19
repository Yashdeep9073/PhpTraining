<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed :" . mysqli_connect_error());
    }else{
        // echo "Database Connected !!";
    }


    $sql = "SELECT id,firstname,lastname FROM users";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        //output
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"] . " -Name: " .$row["firstname"] . " " . 
            $row["lastname"] . "<br>" ;
        }
    }else{
        echo "0 results";
    }

    mysqli_close($conn);
?>