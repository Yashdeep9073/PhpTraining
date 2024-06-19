<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" autocomplete="off" action="register.php">
            <div class="form-group">
                <label for="otp">OTP</label>
                <input class="form-control" id="otp" placeholder="Enter OTP" name="otp" required type="text">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name="verify_otp" value="Verify OTP" type="submit">
            </div>
        </form>
    </div>
</body>
</html>
