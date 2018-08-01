<?php
	session_start();
		$servername = "localhost";
		$username="username";
		$password="";


		$conn = new mysqli("localhost","root","");

		
		if (!$conn) {
			die("Connection not successful");
			} else

			{

				$result = mysqli_select_db($conn,'prs');

				}

			
		if(!isset($_SESSION['loggedin'])){
				header("location:index.php");
		}

?>