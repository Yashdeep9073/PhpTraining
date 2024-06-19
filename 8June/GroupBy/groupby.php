<?php

$conn = new mysqli("localhost","root","","students");

if($conn->connect_error){
    die("Connection" . $conn->connect_error);
}else{
    echo "";
}

$sql = "SELECT city.city,COUNT(student.city),course.course,COUNT(student.course)
FROM student INNER JOIN city 
ON student.city = city.c_id
INNER JOIN course
ON student.course = course.crid
GROUP BY city
";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()){

        echo "<pre>";
        print_r($row);  
    }
}

$conn->close();


?>