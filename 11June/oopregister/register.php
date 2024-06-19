<?php

    require 'function.php';

    $register = new Register();

    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'] ;
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;
        $confirmPassword = $_POST['confirmPassword'];

        $result = $register->registration( $fullname,$email,$password,$confirmPassword);
        
        if($result == 2){
            $_SESSION['email'] = $_POST['email'];
            header('Location: verify_otp.php');
            exit();
        }elseif($result == 10){
            echo'<div class="alert alert-danger">Username or Email Has Already Existed</div>';
        }elseif($result == 100){
            echo '<div class="alert alert-danger">Password does not match</div>';
        }

        if(isset($_POST['verify_otp'])){
            $result = $register->verifyOtp($email, $_POST['otp']);
    
            if($result == 1){
                echo '<div class="alert alert-success">Registration complete</div>';
                header('login.php');
                unset($_SESSION['email']);
            }elseif($result == 102){
                echo '<div class="alert alert-danger">Invalid or expired OTP</div>';
            }
    
        }
    } 


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\
    , initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" autocomplete="off" action="register.php">
            <div class="form-group">
                <label for="">Full Name</label>
                <input class="form-control" placeholder="Full Name"  name="fullname" required type="text">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" placeholder="Email" name="email" required type="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" name="password" placeholder="Password"  required type="password">
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input class="form-control" name="confirmPassword" placeholder="Confirm Password" required type="password">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="submit" value="Register"  type="submit">
            </div>
            <p><a href="login.php">Login Here..</a></p>
        </form>
    </div>
</body>
</html>