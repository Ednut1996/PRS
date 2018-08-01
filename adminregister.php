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


							$name =$_POST['adminname'];
							$email =$_POST['adminemail'];
							$username =$_POST['adminusername'];
							$password =$_POST['adminpassword'];


								$sql = "INSERT INTO admin (adminname,adminemail,adminusername,adminpassword)VALUES ('$name','$email','$username','$password')";

									$result = mysqli_query($conn,$sql);
									if (!$result)
										{
									die('could not enter data:' .mysqli_error($conn));
									}
									echo "entered new admin";
									




?>