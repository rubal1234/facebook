<?php

require('connection.php');

// Include the JWT library
require_once 'vendor/autoload.php';

use Firebase\JWT\JWT;


class Authenticate
{
    
    public $conn;

    public $username;

    public $password;

    public $validate;

    function __construct()
    {
        $connection = new connection();

        $this->conn = $connection->getConnection();
    }

    function checkCookie(){

        if (isset($_COOKIE['jwt'])) {
            $this->validate = true;
            echo json_encode($this->validate);
            exit;
        }

    }

    function getUser(){

        $email_phone = $_POST['user_name'];

        $stmt = $this->conn->query("SELECT * FROM user where email_phone = '$email_phone' ");

        while ($row = $stmt->fetch()) {

            $this->username = $row['email_phone'];

            $this->password =  $row['password'];

        }

        // Define your secret key
        $secret_key = bin2hex(random_bytes(32));

        
        // Check if the user has submitted the login form
        if (isset($_POST['user_name']) && isset($_POST['password'])) {

            // Validate the user's credentials
            if ($_POST['user_name'] === $this->username && $_POST['password'] === $this->password) {

                

                // Define the token payload
                $token_payload = array(
                    "iss" => "example.com",
                    "aud" => "example.com",
                    "iat" => time(),
                    "nbf" => time(),
                    "exp" => time() + (5 * 60), // Token will expire in 1 minute
                    "sub" => $this->username
                );

                // Generate the JWT
                $jwt = JWT::encode($token_payload, $secret_key, 'HS256');

                // Set the JWT as a cookie
                setcookie("jwt", $jwt, time() + (5 * 60), "/", "", false, true);

                $this->validate = true;

                echo json_encode($this->validate);
                
                exit;
            } else {
                echo "Invalid credentials.";
            }
        }

        
    }
}

$user = new Authenticate();

if(isset($_POST['check_login'])){
  $user->getUser();    
}

if(isset($_POST['checkCookie'])){

   $user->checkCookie();          
}










?>
