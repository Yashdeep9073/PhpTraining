<?php


$conn = mysqli_connect("localhost","root","","form");
if(!$conn){
    die("Connection ". mysqli_connect_error());
};

$sql = "SELECT products.product_id,people.name FROM products
INNER JOIN people
ON products.people_id = people.people_id
";
$result = mysqli_query($conn,$sql);

?>