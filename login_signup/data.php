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

		$first_name = $_POST['first_name'];

		$last_name = $_POST['last_name'];

		$email_phone = $_POST['email_number'];

		$password = $_POST['password'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$dob = $_POST['dob'];

		$gender = $_POST['gender'];

		$sql = "INSERT INTO user (first_name, last_name, email_phone, password, dob, gender) VALUES ('$first_name', '$last_name', '$email_phone', '$hashed_password', '$dob', '$gender')";

		$this->conn->exec($sql);

	}
}

$create_profile = new Signup();

$create_profile->setUser();

?>