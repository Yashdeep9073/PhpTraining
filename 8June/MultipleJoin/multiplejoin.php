<?php

$conn = new mysqli('localhost','root','','students');

if($conn->connect_error){
    die('Connection Error'. $conn->connect_error);
}else{
    echo 'Databbase Connected';
}

$sql = 'SELECT * FROM student
INNER JOIN city
ON student.city = city.c_id
INNER JOIN course
ON student.course = course.crid
';

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<pre>';
        print_r($row);
    }

}

?>