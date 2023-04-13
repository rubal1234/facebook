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

    function getUser($email_phone,$password){

        // $email_phone = $_POST['user_name'];

        $stmt = $this->conn->query("SELECT * FROM user where email_phone = '$email_phone' ");

        while ($row = $stmt->fetch()) {

            $this->username = $row['email_phone'];

            $this->password =  $row['password'];

        }

        // Define your secret key
        $secret_key = bin2hex(random_bytes(32));

        // Validate the user's credentials
        if (password_verify($password, $this->password) && $email_phone === $this->username) {

           
            //Define the header
            $header = ['algo' => 'HS256', 'type' => 'HWT'];

            $header_encoded = base64_encode(json_encode($header));


            // Define the token payload
            $token_payload = array(
                "iss" => "example.com",
                "aud" => "example.com",
                "iat" => time(),
                "nbf" => time(),
                "exp" => time() + 60*60, // Token will expire in 1 minute
                "sub" => $this->username
            );

            $payload_encoded = base64_encode(json_encode($token_payload));

            // Generate the JWT
            $jwt = hash_hmac('SHA256', $header_encoded.$payload_encoded, $secret_key);

            // Set the JWT as a cookie
            setcookie("jwt", $jwt, time() + 60*60, "/", "", false, true);

            $this->validate = true;

            echo json_encode($this->validate);
                
            exit;
        } else {
            echo "Invalid credentials.";
        }
        

        
    }
}

$user = new Authenticate();

if(isset($_POST['checkCookie'])){

   $user->checkCookie();          
}

// Decode the data, key, and IV received via AJAX
$encoded_data = $_POST['data'];

$key = hex2bin($_POST['key']);

$iv = hex2bin($_POST['iv']);

// Decrypt the data using AES decryption with the key and IV
$decrypted_data = openssl_decrypt(base64_decode($encoded_data), 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);

// Use the data as needed
$data = json_decode($decrypted_data);

$check_login = $data->check_login;

$email_phone = $data->user_name;

$password = $data->password;

if($check_login){
  $user->getUser($email_phone,$password);    
}











?>
