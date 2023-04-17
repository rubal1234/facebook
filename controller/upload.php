<?php 

require('../connection/connection.php');


session_start();

class Post
{
	
	public $conn;
   	
   	function __construct()
   	{
   		$connection = new Connection();

		$this->conn = $connection->getConnection();
   	}

   	function updatePost(){

   		$caption_text = $_POST['caption'];

		$file_name = $_FILES['file']['name'];

		$file = $_FILES['file']['tmp_name'];

		$name = $_SESSION['name'];

		move_uploaded_file($file, '../user-images/' . $file_name);

		header('Location: /facebook');

		$insert_query = "INSERT INTO post (image,name,caption) VALUES ('../user-images/$file_name','$name','$caption_text')";

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