<?php
	$conn = new mysqli("localhost","root","");

	
			if(!$conn) {
			die("Connection not successful");
			}else

			{

				$result = mysqli_select_db($conn,'prs');

				}

			if( isset($_POST['submit']) && !empty($_POST['staffusername']) && !empty($_POST['staffpassword']) ){

				$staffname = $_POST['staffusername'];
				$staffpass = $_POST['staffpassword'];

				$query = mysqli_query($conn, "SELECT * FROM staff WHERE staffusername = '$staffname' ");

				if(mysqli_num_rows($query) > 0){
					while($rows = mysqli_fetch_array($query)){
						$dbpass = $rows['staffpassword'];
						$dbname = $rows['staffusername'];
						$dbid = $rows['staffid'];
					}
					
						if(md5($staffpass) == $dbpass){
							session_start();
							$_SESSION['id'] = $dbid;
							$_SESSION['loggedin'] = true;
							header("location:dashboard.php");
							// print_r($rows);

						}else{
							echo "Incorrect password";
						}
				}else{
					echo "User does not exist";
				}
			}



?>

<!DOCTYPE html>
<html>
<head>
	<title>STAFF LOGIN</title>
			<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		  	<meta name="viewport" content="width=device-width, initial-scale=1">

  		  	<link href="css/bootstrap.min.css" rel="stylesheet">
		 
	
</head>
<body>

			<div class="container">
				
			<h1> STAFF LOGIN: </h1>
			<form method="POST" action="">
			<div class="form-group">

				<label for="username">Username</label>
				<input type="text" class="form-control" name="staffusername">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="staffpassword">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="log in" class="btn btn-default">
			</div>

			<div class="checkbox">
			<label>

			<input type="checkbox"> keep me logged in
			
			</label>
			</div>
			</form>
			</div>

 				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
	
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>