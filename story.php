<?php 

    $conn = mysqli_connect("localhost", "root", "", "facebook");

	$url = "left_nav_bar.html"; 

	$html = file_get_contents($url);


	$pattern = '/<span class="ps-2 pt-1 user-name">(.*?)<\/span>/'; 

	$user_name;

	if (preg_match($pattern, $html, $matches)) {
	  $user_name = $matches[1];
	}

	$file_name = $_FILES['imgInp']['name'];

	$file = $_FILES['imgInp']['tmp_name'];

	move_uploaded_file($file, 'story-images/' . $file_name);

	header('Location: /facebook');

	$insert_query = "INSERT INTO story (name,image_path) VALUES ('$user_name','story-images/$file_name')";

	if ($conn->query($insert_query) === TRUE) {
		  echo "New record created successfully";
	} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>