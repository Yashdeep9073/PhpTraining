<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

//data from form
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO form(email,password) VALUES('$email','$password')";

    if (mysqli_query($conn,$sql)) {
        echo "Data stored ";
    }else{
        echo "Error";
    }

}
mysqli_close($conn);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
