<?php

    $conn = new mysqli('localhost', 'root', '', 'students');

    if($conn->connect_error){
        die('Connection failed ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM student CROSS JOIN city";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<pre>";
            print_r($row);
        }
    }

?>