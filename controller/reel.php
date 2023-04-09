<?php 

require('../connection/connection.php');
require('user.php');

class Reel
{
	
	public $conn;

   	public $user_name;
   	
   	function __construct()
   	{
   		$connection = new Connection();

   		$user = new User();

		$this->conn = $connection->getConnection();

		$this->user_name = $user->findUser();
   	}

   	function updateReel(){

   		$file_name = $_FILES['vdoInp']['name'];

		$file = $_FILES['vdoInp']['tmp_name'];

		move_uploaded_file($file, '../reels-videos/' . $file_name);

		$insert_query = "INSERT INTO reels (name,video_path) VALUES ('$this->user_name','reels-videos/$file_name')";

		if ($this->conn->query($insert_query) === TRUE) {

			  echo "New record created successfully";

		} else {

			  echo "Error: " . $sql . "<br>" . $conn->error;

		}

		header('Location: /facebook');

   	}

}

$reel = new Reel();

$reel->updateReel();

	
?>