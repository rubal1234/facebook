<?php 
require('../connection/connection.php');

session_start();

class Story{

   	public $conn;

   	public $user_name;
   	
   	function __construct()
   	{
   		$connection = new Connection();

		$this->conn = $connection->getConnection();

   	}


   	function updateStory(){

   		$file_name = $_FILES['imgInp']['name'];

		$file = $_FILES['imgInp']['tmp_name'];

		$name = $_SESSION['name'];

		move_uploaded_file($file, '../story-images/' . $file_name);

		$insert_query = "INSERT INTO story (name,image_path) VALUES ('$name','../story-images/$file_name')";

		if ($this->conn->query($insert_query) === TRUE) {

			  echo "New record created successfully";

		} else {

			  echo "Error: " . $sql . "<br>" . $conn->error;

		}

		header('Location: /facebook');

   	}

}

$controller = new Story();

$controller->updateStory();
	

?>