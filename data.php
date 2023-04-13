<?php 
include ('connection.php');


class Signup
{
	public $conn;

	function __construct()
	{
		$connection = new connection();

		$this->conn = $connection->getConnection();
	}

	function setUser(){

		// Decode the data, key, and IV received via AJAX
		$encoded_data = $_POST['data'];

		$key = hex2bin($_POST['key']);

		$iv = hex2bin($_POST['iv']);

		// Decrypt the data using AES decryption with the key and IV
		$decrypted_data = openssl_decrypt(base64_decode($encoded_data), 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);

		// Use the data as needed
		$data = json_decode($decrypted_data);

		$first_name = $data->first_name;

		$last_name = $data->last_name;

		$email_phone = $data->email_number;

		$password = $data->password;

		echo $password;

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		echo $hashed_password;

		$dob = $data->dob;

		$gender = $data->gender;

		$sql = "INSERT INTO user (first_name, last_name, email_phone, password, dob, gender) VALUES ('$first_name', '$last_name', '$email_phone', '$hashed_password', '$dob', '$gender')";

		$this->conn->exec($sql);

	}
}

$create_profile = new Signup();

$create_profile->setUser();

?>