<?php
			include("include.php");

							if (isset($_POST['send'])){
							$name =$_POST['staffname'];
							$username =$_POST['staffusername'];
							$password =$_POST['staffpassword'];
							$dob =$_POST['staffdob'];
							$gender =$_POST['staffgender'];
							$email =$_POST['staffemail'];			
							$phoneno =$_POST['staffphonenum'];
							$jobdesc =$_POST['staffjobdesc'];

							$password = md5($password);

							$sql= "INSERT INTO staff(staffname,staffusername,staffpassword,staffdob,staffgender,staffemail,staffphonenum,staffjobdesc)VALUES('$name','$username','$password','$dob','$gender','$email','$phoneno','$jobdesc')";
							$result = mysqli_query($conn,$sql );
							if(!$result)
							{
								die('could not enter data:' .mysqli_error($conn));
							}
							echo "entered new staff";
							}

?>





<!DOCTYPE html>
<html>
<head>
	<title>Register Staff</title>

				<meta charset="utf-8">
    			<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		  		<link href="css/bootstrap.min.css" rel="stylesheet">
		 
</head>
<body>
				
				
				<div class="container">
				<form method="POST">
				
				<div class="form-group">

				<label for="staffname">Name:</label>
				<input type="text" class="form-control" name="staffname" placeholder="Name">
				
				</div>

				<div class="form-group">

				<label form="username">Username</label>
				<input type="text" class="form-control" name="staffusername" placeholder="Username">
				</div>

				<div class="form-group">
				<label form="password">Password</label>
				<input type="password" class="form-control" name="staffpassword" placeholder="Password">
				</div>


				<div class="form-group">

				<label for="staffdob">DateofBirth:</label>
				<input type="text" class="form-control" name="staffdob" placeholder="Date of Birth">
				
				</div>

				<div class="form-group">
				<label for="staffgender">Gender:</label>
				<input type="text" class="form-control" name="staffgender" placeholder="Gender">
				
				</div>

				<div class="form-group">

				<label for="staffemail">Email:</label>
				<input type="text" class="form-control" name="staffemail" placeholder="Email">
				
				</div>

				
				<div class="form-group">

				<label for="staffphoneno">Phone Number:</label>
				<input type="text" class="form-control" name="staffphonenum" placeholder="Phone Number">
				
				</div>

				<div class="form-group">

				<label for="staffjobdesc">Job Description:</label>
				<input type="text" class="form-control" name="staffjobdesc" placeholder="Job Description">
				
				</div>

				 <button type="submit" class="btn btn-success" name="send">Submit</button> </button>



				</form>
				
				</div>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>