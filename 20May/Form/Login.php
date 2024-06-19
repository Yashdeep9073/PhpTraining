<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include("Connect.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM  `user` WHERE username= '$email' AND password= '$password'";
    $sql = "SELECT * FROM  `user` WHERE email = '$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row["password"])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                // $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $email;
                header("location: dashboard.php");      
            }
        }
    }else{
        $showError = "Invalid";
    }
    mysqli_close($conn);    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
</head>
<body>
    <div class="container" id="signup" >
        <h1 class="form-title">SignIn Here</h1>
        <form method="post" >
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit"  value="Sign In" name="signIn">
        </form>

</body>
</html>
