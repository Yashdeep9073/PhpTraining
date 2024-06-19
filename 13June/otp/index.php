<?php

//otp generate
	$otp_str = str_shuffle("0123456789");
	$otp = substr($otp_str,0-5);

	//activate code
	$act_str = rand(100000,10000000);
	$activation_code = str_shuffle( "abcdefghijklmnopqrtsuvwxyz". $act_str );

	//register 

	if(isset($_POST['register'])){
		$otp = $_POST['otp'];
		$activation_code = $_POST['activation_code'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		//secure password
		$passwordHash = password_hash($password,PASSWORD_DEFAULT);

		//unique email
		$selectDatabase  = "SELECT * FROM user WHERE email = '$email'";
		$selectResult = mysqli_query($conn , $selectDatabase ) ;

		if(mysqli_num_rows($selectResult) > 0){
			
			$selectRow = mysqli_fetch_assoc($selectResult);
			$status =  $selectRow['status'];
			
			if($status == 'activate'){
				echo '<script>alert("Email already registed")</script>';
			}
			else{
				
			}

		}
	}


?>

<!DOCTYPE html>
<html lang="en">

 	<head>
 		<!-- Meta Tags -->
		<meta charset="UTF-8">
		<meta name="author" content="Yash">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Site Title -->
 		<title>PHP Signup with OTP Email Verification System</title>
 		<!-- External Style Sheet -->
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->

 	</head>
<body>

	<div class="wrapper" id="login-side">
		<div class="left-side">
			<h2>Login</h2>
			<hr>
			<form action="" method="POST">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; }?>" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; }?>"autocomplete="off" required>
				</div>
				<div class="form-group extra">
					<input type="checkbox" name="rememberme" value="checked" <?php if(isset($_COOKIE['email'])){ echo 'checked'; }?>><label class="rem">Remember me</label>
					<label class="forgot"><a href="forgot_password.php">Forgot Password?</a></label>
				</div>
				<div class="form-group">
					<label></label>
					<input type="submit" name="login" value="Login">
				</div>
			</form>
		</div>
		<div class="container"></div>
		<div class="right-side" id="singup-text-side">
			<h2>Register</h2>
			<hr>
			<div class="right-side-text">
				<p>Don't have an account?</p>
				<p>Please click to signup button for register</p>
				<a href="javascript:void(0);" id="signup-button">Signup</a>
			</div>
		</div>
	</div> <!-- End of Login Wrapper -->
	
	
	<div class="wrapper display" id="signup-side">
		<div class="left-side signUp">
			<h2>Signup</h2>
			<hr>		
			<form action="" method="POST">				

				<input type="hidden" name="otp" value="<?php echo $otp; ?>">
				<input type="hidden" name="activation_code" value="<?php echo $activation_code; ?>">

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" placeholder="Your Name" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" placeholder="Email" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required>
				</div>
				<div class="form-group">
					<label></label>
					<input type="submit" name="register" value="Signup">
				</div>
			</form>
		</div>
		<div class="container"></div>
		<div class="right-side" id="login-text-side">
			<h2>Login</h2>
			<hr>
			<div class="right-side-text">
				<p>Already have an account?</p>
				<p>Please click to login button for login</p>
				<a href="javascript:void(0)" id="login-button">Login</a>
			</div>
		</div>
	</div> <!-- End of Signup Wrapper -->

</body>

<script type="text/javascript" src="js/jquery.min.3-4-1.js"></script>
<script>
	$(document).ready(function(){
		$('#signup-button').click(function(){
			$('#login-side').fadeOut().addClass('display');
			$('#signup-side').fadeIn().removeClass('display');			
		});
		$('#login-button').click(function(){
			$('#signup-side').fadeOut().addClass('display');
			$('#login-side').fadeIn().removeClass('display');	
		});
	});
</script>

</html>