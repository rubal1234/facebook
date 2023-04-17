<?php  

require('../connection/connection.php');

session_start();

class Profile
{
	
	public $conn;
   	
   	function __construct()
   	{
   		$connection = new Connection();

		$this->conn = $connection->getConnection();

   	}

   	function updatePicture(){
        $email = $_SESSION['email'];

        $file_name = $_FILES['profile']['name'];

		$file = $_FILES['profile']['tmp_name'];

		move_uploaded_file($file, '../profile-images/' . $file_name);

		$update_query = "UPDATE user SET image_path =  '../profile-images/$file_name' WHERE email_phone = '$email'";

		if ($this->conn->query($update_query) === TRUE) {

			  echo "New record created successfully";

		} else {

			  echo "Error: " . $sql . "<br>" . $conn->error;

		}

		$_SESSION['image-path'] = "../profile-images/$file_name";

		header('Location: /facebook');

   	}
}

$profile = new Profile();

$profile->updatePicture();




?>