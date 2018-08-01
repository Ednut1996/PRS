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

		
							$name =$_POST['staffname'];
							$username =$_POST['staffusername'];
							$password =$_POST['staffpassword'];
							$dob =$_POST['staffdob'];
							$gender =$_POST['staffgender'];
							$email =$_POST['staffemail'];			
							$phoneno =$_POST['staffphonenum'];
							$jobdesc =$_POST['staffjobdesc'];

							$sql= "INSERT INTO staff(staffname,staffusername,staffpassword,staffdob,staffgender,staffemail,staffphonenum,staffjobdesc)
							VALUES('$name','$username','$password','$dob','$gender','$email','$phoneno','$jobdesc')";
							$result = mysqli_query($conn,$sql );
							if(!$result)
							{
								die('could not enter data:' .mysqli_error($conn));
							}
							echo "entered new staff";
							

?>