<?php

if (isset($_POST["verify_otp"])) {
    $otp = $_POST["inputOtp"];
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
<form method="post" action="otp.php">
<div class="section">
    <label for="fullnameInput">Enter Your OTP</label>
    <input name="inputOtp" type="text" class="form-control" id="otpInput" >
  </div>
  <button name="verify_otp" class="btn btn-primary">Register</button>
</form>

    </div>
</body>
</html>