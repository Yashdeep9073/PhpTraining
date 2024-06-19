<?php

    class User{
        private $conn;
        private $table = "user";

        public $fullname;
        public $email;
        public $password;

        public function __construct($db){
            $this->conn = $db;
        }

        public function register(){
            $query = 'INSERT INTO ' . $this->table . 
            ' (fullname, email, password) 
            VALUES (:fullname, :email, :password)';


            $stmt = $this->conn->prepare($query);

            $this->fullname = htmlspecialchars(strip_tags($this->fullname));
            $this->email = htmlspecialchars(strip_tags($this->email));
            $this->password = htmlspecialchars(strip_tags($this->password,PASSWORD_DEFAULT));
            
            //hash
            $this->password = password_hash($this->password, PASSWORD_DEFAULT);

            $stmt->bindParam(":fullname", $this->fullname);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":password", $this->password);

            if($stmt->execute()){
                return true;
            }
            
            printf("Error: %S.\n", $stmt->errorInfo()[2]);
            return false;
            
            
            
            
            
        }



    }


?>