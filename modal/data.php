<?php 

require('../connection/connection.php');

session_start();

class Modal
{
	public $conn;

	function __construct()
	{
		$connection = new Connection();
		$this->conn = $connection->getConnection();
	}

	function addPost(){

		  	$row_count = $_POST['limit_count'];
			$pos_count = $_POST['post_count'];

			$query = "SELECT * FROM post LIMIT $row_count OFFSET $pos_count";

			$all_data_query = "SELECT * FROM post";

			$result = mysqli_query($this->conn, $query);

			$all_data = array();

			while($data = mysqli_fetch_assoc($result)){
			   $arr = [];
			   array_push($arr, $data['id'],$data['image'],$data['name'],$data['caption'],$data['like_count'],$data['id']);
			   array_push($all_data, $arr);
			}

			$json_data = json_encode($all_data);

			echo base64_encode($json_data);
	}



	function updateLike(){

		$row_id = $_POST['data_post_id'];

	  	$like_count = $_POST['count'];

	  	$like_update_query = " update post set like_count = $like_count where id = $row_id";

	  	mysqli_query($this->conn,$like_update_query);
	}


	function updateStory(){

		$all_data_query = "SELECT * FROM story";

		$result = mysqli_query($this->conn, $all_data_query);

		$all_data = array();

		while($data = mysqli_fetch_assoc($result)){
		   $arr = [];
		   array_push($arr, $data['name'], $data['image_path']);
		   array_push($all_data, $arr);
		}

		$json_data = json_encode($all_data);

		echo base64_encode($json_data);

	}



	function updateReels(){

		$all_data_query = "SELECT * FROM reels ";

		$result = mysqli_query($this->conn, $all_data_query);

		$all_data = array();

		while($data = mysqli_fetch_assoc($result)){
		   $arr = [];
		   array_push($arr,$data['video_path']);
		   array_push($all_data, $arr);
		}

		$json_data =  json_encode($all_data);

		echo base64_encode($json_data);
	}

	function addComment(){

		$row_id = $_POST['id'];

    	$comment_text = $_POST['commentText'];

    	$insert_comment_query = "update post set comment_text = '$comment_text' where id = $row_id";

    	if(mysqli_query($this->conn,$insert_comment_query)){
    		echo "true";
    	}else{
    		echo "false";
    	}

	}

	function removeCookie(){
		if (isset($_COOKIE['jwt'])){
			setcookie("jwt", '', time() - 60*60, "/", "", false, true);
		}
	}

	function changePwd(){

		$email = $_SESSION['email'];

		// Decode the data, key, and IV received via AJAX
		$encoded_data = $_POST['data'];

		$key = hex2bin($_POST['key']);

		$iv = hex2bin($_POST['iv']);

		// Decrypt the data using AES decryption with the key and IV
		$decrypted_data = openssl_decrypt(base64_decode($encoded_data), 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);

		// Use the data as needed
		$data = json_decode($decrypted_data);

		$password = $data->pwd;

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$update_query = "UPDATE user SET password =  '$hashed_password' WHERE email_phone = '$email'";

		if ($this->conn->query($update_query) === TRUE) {

			  echo "New record created successfully";

		} else {

			  echo "Error: " . $sql . "<br>" . $conn->error;

		}

	}


}

$modal = new Modal();

if(isset($_POST['post_update'])){
   $modal->addPost();
}

if(isset($_POST['like_update'])){
  	$modal->updateLike();
}


if(isset($_POST['get_story'])){
   $modal->updateStory();
}

if(isset($_POST['get_reels'])){
   $modal->updateReels(); 	
}


if(isset($_POST['setComment'])){
   $modal->addComment(); 	 
}

if(isset($_POST['cookie'])){
	$modal->removeCookie();
}

if(isset($_POST['changePwd'])){
	$modal->changePwd();
}

  
?>