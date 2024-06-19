<?php 

$conn = mysqli_connect("localhost","root","","test");

if(!$conn){
    die("Connection Failed !!!". mysqli_connect_error());
}else{
    echo 'Database connected !!';
}

$sql = "SELECT `order`.OrderId ,`customer`.CustomerName , `order`.OrderDate 
FROM `order` 
INNER JOIN `customer` 
ON order.CustomerName = customer.CustomerId
ORDER BY order.OrderId DESC
";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo'<pre>';
        print_r($row);
    }
}
?>