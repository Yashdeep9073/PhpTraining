<?php
    session_start();


    class Connection{
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $db_name = "test";

        public $conn;

        public function __construct(){
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    
    class Register extends Connection{
        public function registration($fullname,$email,$password,$confirmPassword){

            $duplicate = mysqli_query($this->conn,"SELECT * FROM user WHERE email = '$email'");

            if(mysqli_num_rows($duplicate) > 0){
                return 10;
                //user already existed
            }else{

                if($password === $confirmPassword){

                    //generate otp
                    $otp = rand(100000,999999);
                    $otp_expiration  = date('Y-m-d H:i:',strtotime('+10 minutes'));
                    $verified = 0;

                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO user (fullname,email,password,otp,otp_expiration, verified) VALUES('$fullname','$email','$passwordHash','$otp','$otp_expiration','$verified')";

                    mysqli_query($this->conn, $query);

                    //send otp
                    $this->sendOtp($email,$otp);
                    // header("Location: verify_otp.php");
                    return 2;//otp sent

                }else{
                    return 100;
                    //password doesnot match
                }
            }



        }

        public function sendOtp($email,$otp){
            //use a mailing library PHPmailer
            $subject = "Your OTP code ";
            $message = "Your OTP is $otp";
            mail($email, $subject, $message);
        }


        public function verifyOtp($email,$otp){
            $query = mysqli_query($this->conn,"SELECT * FROM user WHERE email = '$email' AND otp = '$otp' AND otp_expiration > NOW() AND verified = '0' ");
            if(mysqli_num_rows($query) > 0){
                mysqli_query($this->conn,"UPDATE user SET verified = '1' WHERE email = '$email'");
                return 1;
            }else{
                return 102;//invaild otp
            }
        }

    }

    class Login extends Connection{
        public $id;
        public function login($email,$password){
            $result = mysqli_query($this->conn,"SELECT * FROM user WHERE email = '$email'
            ");

            $row = mysqli_fetch_array($result);

            if(mysqli_num_rows($result) > 0){

                if(password_verify($password,$row['password'])){

                    $this->id = $row['id']; 
                    return 1;
                    //login successfull
                }else{
                    return 10;
                    //wrong password
                }
            }else{
                return 100;
                //user not registered
            }
        }

        public function idUser(){
            return $this->id;
        }
    }

?>