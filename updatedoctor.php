<?php
session_start();
if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}


		$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
		}


		$result = mysqli_select_db($conn,'prs');


							$name =$_POST['doctorname'];
							$email =$_POST['doctoremail'];
							$phoneno =$_POST['doctorphoneno'];
							$username =$_POST['doctorusername'];
							$password =$_POST['doctorpassword'];
							$specialisation =$_POST['doctorspecialisation'];
										
							
							$id = $_SESSION['tid'];

		$sql = "Update doctor set doctorname = '$name', doctoremail = '$email', doctorphoneno = '$phoneno', doctorusername = '$username', doctorpassword ='$password', doctorspecialisation = '$specialisation'  WHERE doctorid = '$id' ";

		$result = mysqli_query($conn,$sql);

		if ($result)

		{
		echo "update successful";
		echo mysqli_error($conn);
		}

		else {
		echo "not successful";
		}

?>