<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard Page</h1>
</body>
</html>

<?php
    session_start();
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] != true) {
        header("location: login.php");
    }
?>