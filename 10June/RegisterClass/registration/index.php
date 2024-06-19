<?php

    
    require "./config/Database.php";
    require "./classes/User.php";

    $database = new Database();
    $db = $database->connect();
    
    $user = new User($db);
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user->fullname = $_POST['fullname'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
    
        if ($user->register()) {
            echo 'User registered successfully.';
        } else {
            echo 'User could not be registered.';
        }
    } else {
        require './views/register.html';
    }

?>