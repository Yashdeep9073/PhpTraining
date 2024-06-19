<?php
    require "../config/function.php";

    $register = new Register();

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $result = $register->registration($fullname,$email,$password, $confirmPassword);

        if($result == 1){
            echo '<div class="alert alert-danger">user already exitsed</div>';
        }elseif($result == 2){
        $_SESSION['email'] = $_POST['email'] ;
        header('Location: otp.php');
        exit();
        }elseif($result == 100){
            echo '<div class="alert alert-danger">Password And Confirm Password Not Match</div>';
        }
    }

if (isset($_POST["verify_otp"])) {
    $response = $register->verifyOtp($_POST["inputOtp"]) ;
    
    if($response == 1){
        echo '<div class="alert alert-success">Registration complete</div>';
        unset($_SESSION['email']);
        
    }elseif($response == 102){
        echo '<div class="alert alert-danger">Invalid or expired OTP</div>';
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
<form method="post" action="register.php">
<div class="section">
    <label for="fullnameInput">Full Name</label>
    <input name="fullname"  type="text" class="form-control" id="fullnameInput" placeholder="Enter email">
  </div>

  <div class="section">
    <label for="emailInput">Email address</label>
    <input name="email" type="email" class="form-control" id="emailInput" placeholder="Enter email">
  </div>

  <div class="section">
    <label for="passwordInput">Password</label>
    <input name="password" type="password" class="form-control" id="passwordInput" placeholder="Password">
  </div>
  <div class="section">
    <label for="passwordInput">Confirm Password</label>
    <input name="confirmPassword" type="password" class="form-control" id="passwordInput" placeholder="Password">
  </div>

  <button name="submit" class="btn btn-primary">Register</button>
</form>

    </div>
</body>
</html>