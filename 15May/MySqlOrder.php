<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    //create connection

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection Error" . mysqli_connect_error());
    }else{
        echo "<h1>Database Connected</h1>";
    }

    $sql = "SELECT id,firstname,lastname FROM users ORDER BY firstname ASC";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0 ){
        //while loop

        while ($rows = mysqli_fetch_assoc($result)) {
            echo "id :" . $rows["id"] . "Name: " . $rows["firstname"] . $rows["lastname"] . "<br>" ;
        }
    }

    mysqli_close($conn);



?>