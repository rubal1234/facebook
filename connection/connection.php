<?php  

class Connection
{
	
	function getConnection()
	{
		$conn = new mysqli("localhost", "root", "", "facebook");

		if($conn->connect_error){
			echo "failed";
		}

		return $conn;
	}
}

?>