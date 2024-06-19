<?php 

$conn = mysqli_connect("localhost", "root", "", "otp_verification");

if (!$conn) {
	die("Connection Failed ".mysqli_connect_error());
}else{
}