<?php 

require('../connection/connection.php');
require('user.php');

class Post
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

   	function updatePost(){

   		$caption_text = $_POST['caption'];

		$file_name = $_FILES['file']['name'];

		$file = $_FILES['file']['tmp_name'];

		move_uploaded_file($file, '../user-images/' . $file_name);

		header('Location: /facebook');

		$insert_query = "INSERT INTO post (image,name,caption) VALUES ('user-images/$file_name','$this->user_name','$caption_text')";

		if ($this->conn->query($insert_query) === TRUE) {
			  echo "New record created successfully";
		} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
		}

   	}

}

$post = new Post();

$post->updatePost();    
    

?>