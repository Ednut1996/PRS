<?php
session_start();

		$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
		}


		$result = mysqli_select_db($conn,'prs');


							$name =$_POST['staffname'];
							$username =$_POST['staffusername'];
							$password =$_POST['staffpassword'];
							$dob =$_POST['staffdob'];
							$gender =$_POST['staffgender'];
							$email =$_POST['staffemail'];			
							$phoneno =$_POST['staffphonenum'];
							$jobdesc =$_POST['staffjobdesc'];

							$id = $_SESSION['tid'];

		$sql = "Update staff set staffname = '$name', staffusername = '$username', staffpassword = '$password', staffdob = '$dob', staffemail ='$email', staffphonenum = '$phoneno',  staffgender = '$gender',  staffjobdesc = '$jobdesc' WHERE staffid = '$id' ";

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