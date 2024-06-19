<?php
    include("Connect.php");

    $user_email = "ydeep9073@gmail.com
    ";

    $sql = "SELECT email FROM `user` WHERE email = '$user_email'";

    $result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row['email']);
    }
?>