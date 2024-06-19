<?php

require "function.php";

if(!empty($_SESSION['id'])){
    header('Location: ndex.php');
}

$login = new Login();


if(isset($_POST['submit'])){
    $result = $login->login($_POST['email'],$_POST['password']);


    if($result == 1){
        $_SESSION['login'] = 'true';
        $_SESSION['id'] = $login->idUser();
        header('Location: ndex.php');
    }elseif($result == 10){
        echo'<div class="alert alert-danger">Wrong Password</div>';
    }elseif($result == 100){
        echo'<div class="alert alert-danger">User not found</div>';
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
        <form method="post" autocomplete="off" action="">
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" placeholder="Email" name="email" required type="email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input class="form-control" name="password" placeholder="Password"  required type="password">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="submit" value="Login"  type="submit">
            </div>
            <p><a href="register.php">Register Here..</a></p>
        </form>
    </div>
</body>
</html>