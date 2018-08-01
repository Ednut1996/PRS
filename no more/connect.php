<?php

		$servername = "localhost";
		$username="username";
		$password="";


		$conn = new mysqli("localhost","root","");

		
		if (!$conn) {
			die("Connection not successful");
			}
			
			else{
			echo "connected successfully";
				}

?>