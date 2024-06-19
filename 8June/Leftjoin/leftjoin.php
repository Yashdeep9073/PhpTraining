<?php 
    $conn = new mysqli('localhost','root','','students');

    if($conn->connect_error){
        die("Connection error !!". $conn->connect_error);
    }else{
        echo "Database connected";
    }

    $sql = "SELECT * FROM student
    RIGHT JOIN city 
    ON student.city = city.c_id
    ";
    // $sql = "SELECT * FROM student
    // LEFT JOIN city 
    // ON student.city = city.c_id
    // ";

    $result =  $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<pre>';
            print_r($row);
        }
    }

    $conn->close();
?>