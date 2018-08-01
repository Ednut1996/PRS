<?php

session_start();
if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}


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

		
		$doctorname = $_POST['doctorusername'];
		$doctorpassword = $_POST['doctorpassword'];

		$query = mysqli_query($conn, "SELECT * FROM doctor WHERE doctorusername = '$doctorname' ");

			
		if(mysqli_num_rows($query) > 0){

					while($rows = mysqli_fetch_array($query)){
						$dbpass = $rows['doctorpassword'];
						$dbname = $rows['doctorusername'];
						$dbid = $rows['doctorid'];
				}

					if($dbname == $doctorname && $doctorpassword == $dbpass){
						//$_SESSION['name'] = $dbname;
						header('location: doctordashboard.php');

					}
					else{
						echo "Incorrect username or password";
					}


		}else{
			echo "Username does not exist";
}	

?>