<?php session_start(); ?>
<?php 
//unset($_SESSION['name']);
	if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}

?>


<?php
						
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

		
							$name =$_POST['doctorname'];
							$email =$_POST['doctoremail'];
							$phoneno =$_POST['doctorphoneno'];
							$username =$_POST['doctorusername'];
							$password =$_POST['doctorpassword'];
							$specialisation =$_POST['doctorspecialisation'];
										
							
							

							$sql= "INSERT INTO doctor(doctorname,doctoremail,doctorphoneno,doctorusername,doctorpassword,doctorspecialisation)
							VALUES('$name','$email','$phoneno','$username','$password','$specialisation')";
							$result = mysqli_query($conn,$sql );
							if(!$result)
							{
								die('could not enter data:' .mysqli_error($conn));
							}
							echo "entered new DOCTOR";
							

?>