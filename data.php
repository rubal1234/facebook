<?php 

  $conn = mysqli_connect("localhost", "root", "", "facebook");

  if(isset($_POST['post_update'])){

  	$row_count = $_POST['limit_count'];
	$pos_count = $_POST['post_count'];

	$query = "SELECT * FROM post LIMIT $row_count OFFSET $pos_count";

	$all_data_query = "SELECT * FROM post ";

	$result = mysqli_query($conn, $query);

	$all_data = array();

	while($data = mysqli_fetch_assoc($result)){
	   $arr = [];
	   array_push($arr, $data['id'],$data['image'],$data['name'],$data['caption'],$data['like_count'],$data['id']);
	   array_push($all_data, $arr);
	}



	echo json_encode($all_data);

  }

  if(isset($_POST['like_update'])){
  	$row_id = $_POST['data_post_id'];
  	$like_count = $_POST['count'];

  	$like_update_query = " update post set like_count = $like_count where id = $row_id";
  	mysqli_query($conn,$like_update_query);
  }


    if(isset($_POST['get_story'])){

    	$all_data_query = "SELECT * FROM story ";

		$result = mysqli_query($conn, $all_data_query);

		$all_data = array();

		while($data = mysqli_fetch_assoc($result)){
		   $arr = [];
		   array_push($arr, $data['name'],$data['image_path']);
		   array_push($all_data, $arr);
		}
		echo json_encode($all_data);
    }

    if(isset($_POST['get_reels'])){

    	$all_data_query = "SELECT * FROM reels ";

		$result = mysqli_query($conn, $all_data_query);

		$all_data = array();

		while($data = mysqli_fetch_assoc($result)){
		   $arr = [];
		   array_push($arr,$data['video_path']);
		   array_push($all_data, $arr);
		}
		echo json_encode($all_data);
    }


    if(isset($_POST['setComment'])){
    	$row_id = $_POST['id'];

    	$comment_text = $_POST['commentText'];

    	$insert_comment_query = "update post set comment_text = '$comment_text' where id = $row_id";

    	if(mysqli_query($conn,$insert_comment_query)){
    		echo "true";
    	}else{
    		echo "false";
    	}
 
    }

  
?>