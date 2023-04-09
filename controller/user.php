<?php

class User
{
	
	function findUser()
	{
		$url = "../views/left_nav_bar.html"; 

		$html = file_get_contents($url);


		$pattern = '/<span class="ps-2 pt-1 user-name">(.*?)<\/span>/'; 

		$user_name;

		if (preg_match($pattern, $html, $matches)) {

		  $user_name = $matches[1];

		}

		return $user_name;
		
	}
}


 ?>