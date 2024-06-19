<?php


$conn = mysqli_connect("localhost","root","","form");
if(!$conn){
    die("Connection ". mysqli_connect_error());
};



// $sql .= "INSERT INTO people_id(name,age,gender)
// VALUES(4,'Merry', '40', 'Female');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Blauer', '50', 'Male');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Ana', '55', 'Female');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Antonio', '23', 'Male');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Thomas', '14', 'Male');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Maria', '70', 'Female');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Hanna', '25', 'Female');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Patricio', '30', 'Male');
// ";
// $sql ..= "INSERT INTO people(people_id,name,age,gender)
// VALUES(4,'Victoria', '35', 'Female');
// ";

// if (mysqli_multi_query($conn,$sql).) {
//     echo "New records are successfully created"; 
// }else{
//     echo "Error" . mysqli_error($conn);
// }


//PRODUCTS DATA

// $sql = "INSERT INTO products(people_id,name,price,category)
// VALUES(1,'Acer', '25000', 'Mobile');
// ";
// $sql .= "INSERT INTO products(people_id,name,price,category)
// VALUES(2,'Samsung', '25000', 'Mobile');
// ";
// $sql .= "INSERT INTO products(people_id,name,price,category)
// VALUES(3,'Redmi', '25000', 'Mobile');
// ";
// $sql .= "INSERT INTO products(people_id,name,price,category)
// VALUES(4,'Oppo', '25000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(5,'Blackberry', '55000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(6,'Google', '36000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(7,'Nokia', '18000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(8,'Oneplus', '38000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(9,'Sony', '150000', 'Mobile');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(10,'Addidass', '18000', 'Shoes');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(11,'Nike', '8000', 'Shoes');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(12,'Bata', '18000', 'Shoes');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(13,'Louis vatoon', '8000', 'Shoes');
// ";
// $sql .= "INSERT INTO P(people_id,name,price,category)
// VALUES(14,'Jordaan', '80000', 'Shoes');
// ";

// if (mysqli_multi_query($conn,$sql)) {
//     echo "New records are successfully created"; 
// }else{
//     echo "Error" . mysqli_error($conn);
// }

mysqli_close($conn);
?>