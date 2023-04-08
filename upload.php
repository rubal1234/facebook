<?php 
	$conn = mysqli_connect("localhost", "root", "", "facebook");

	$url = "left_nav_bar.html"; 

	$html = file_get_contents($url);


	$pattern = '/<span class="ps-2 pt-1 user-name">(.*?)<\/span>/'; 

	$user_name;

	if (preg_match($pattern, $html, $matches)) {
	  $user_name = $matches[1];
	}

    $caption_text = $_POST['caption'];

	$file_name = $_FILES['file']['name'];

	$file = $_FILES['file']['tmp_name'];

	move_uploaded_file($file, 'user-images/' . $file_name);

	header('Location: /facebook');

	$insert_query = "INSERT INTO post (image,name,caption) VALUES ('user-images/$file_name','$user_name','$caption_text')";

	if ($conn->query($insert_query) === TRUE) {
		  echo "New record created successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>