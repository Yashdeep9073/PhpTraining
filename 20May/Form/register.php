<?php
    include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];


    // Prepare and bind
    $existssql = "SELECT * FROM user WHERE email = '$email' ";
    $result =  mysqli_query($conn, $existssql);

    // Check if email already exists
    if (mysqli_num_rows($result) > 0) {
        header("location:Login.php");
    }else{
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = " INSERT INTO `user` (`fullname`,`email`,`phonenumber`,`password`,`reg_date`)
        VALUES ('$fullname','$email','$phonenumber','$hashed_password',current_timestamp())
        ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: Login.php");
        }
    }


}

mysqli_close($conn);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
</head>
<body>
    <div class="container" id="signup" >
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
               <input type="text" name="fullname" id="fName" placeholder="Full Name" required>
               <label for="fullname">Full Name</label>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="tel" name="phonenumber"  placeholder="Phone Number" required>
                <label for="email">Phone Number</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <div class="links">
            <p>Already Have Account..</p>
            <a href="SignIn.html"><button>Sign In</button></a>
            
        </div>

        
</body>
</html>