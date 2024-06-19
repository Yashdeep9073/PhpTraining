<?php
    session_start();
    class Connection{

        public $host = 'localhost';
        public $username = 'root';
        public $password = '';
        public $db_name = 'test';

        public $conn;

        public function __construct(){
            $this->conn =  new mysqli($this->host,$this->username,$this->password,$this->db_name);

        }
    }

    class Register extends Connection{
        public function registration($fullname,$email,$password,$confirmPassword,$otp,$activation_code){
            
            $dulicate = $this->conn->query("SELECT * FROM user WHERE email = '$email'");

            $statusRow = $dulicate->fetch_assoc();

            //genrate otp
            $otp = rand(100000,999999);

            $activation_str = rand(100000,10000000);
            $activation_code = str_shuffle('abcdefghijklmnopqrstuvwxyz' . $activation_str );

            if($dulicate->num_rows > 0 ){
                
                if($statusRow["status"] == 'activate'){
                    return 1;//user already exitsed
                }else{

                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    
                    
                    
                    $updateResult = $this->conn->query("UPDATE user SET fullname ='$fullname' , password = '$passwordHash', otp = '$otp' , activation_code = '$activation_code' " );
                    
                }
            }else{
                if($confirmPassword == $password){

                    //genrate otp
                    $otp = rand(100000,999999);
                    $otp_expiration  = date('Y-m-d H:i:',strtotime('+10 minutes'));
                    $verified = 0;


                }else{
                    return 100;//wrong password
                }
        }
    }

    public function sendOtp($email,$otp){
        //use

        $subject = "Your otp code";
        $message = "Your otp code is $otp";
        mail($email,$subject,$message);
    }

    public function verifyOtp($otp){
        
    }

}

?>