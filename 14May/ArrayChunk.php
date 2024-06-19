<?php
 //array chunk
//  $students = [
//     "Yashdeep",
//     "Rahul",
//     "Kushal",
//     "Suvi",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet",
//     "Jaspreet"
//  ];
 
//  $chunkArray =  array_chunk($students,3);
 
//  echo "<pre>";

//  print_r($chunkArray);


function chunkStudents($students, $chunkSize) {
    $chunkedArray = array_chunk($students, $chunkSize);

    foreach ($chunkedArray as $chunkNumber => $chunk) {
        echo "Chunk " . ($chunkNumber + 1) . ": " . implode(', ', $chunk) . "<br>";
    }
}

$students = [
    "Aary", "John", "Emily", 
    "David", "Sophia", "Michael", 
    "Emma", "Daniel", "Olivia", 
    "Matthew","Yashdeep","Sargun",
    "Gurpreet","Amanajot","Deep",
    "Rahul","Lucky","Sarab",
];

chunkStudents($students,3)
?>