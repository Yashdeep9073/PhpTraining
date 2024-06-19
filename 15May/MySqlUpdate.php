<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";

    //connection making 
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection Error:" . mysqli_connect_error() );
    }else{
        echo "<h1 style= color:red>Database Connected 🌐</h1>" ;
    }
    
    $sql = "UPDATE users SET lastname = 'singh' WHERE id = 1 " ;

    if (mysqli_query($conn,$sql)) {
        echo "Record Successfully Updated";
    }else{
        echo "Error while Updating:" . mysqli_error($conn);
    }

    mysqli_close($conn);



?>