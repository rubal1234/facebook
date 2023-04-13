<?php 

require('../connection/connection.php');

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

  
?>