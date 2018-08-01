<?php session_start();
	if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>EDIT STAFF INFORMATION</title>

				<meta charset="utf-8">
    			<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		  		<link href="css/bootstrap.min.css" rel="stylesheet">
		 
</head>
<body>
				

			<div class="navbar navbar-default">

				<div class="container">

					<div class="navbar-header">

						<a href="" class="navbar-brand">PRC </a>

						<button type="button" class="navbar-toggle"
						data-toggle="collapse"
						data-target=".navbar-collapse">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>

						</button>

					</div>

					<div class="collapse navbar-collapse">
					
						<ul class="nav navbar-nav">

							<li><a href="staffdashboard.php">Dashboard</a></li>
							<li><a href="logout.php">LOGOUT</a></li>


							
						</ul>
					</div>
				</div>

			</div>
				
			


				<div class="container">
				<h1> EDIT STAFF INFORMATION</h1>	
						<div class="col-lg-12">
							<div class="col-sm-4">
								<ul class="list-group">
													<?php 
						$conn = new mysqli("localhost","root","");
		
					if (!$conn) {
					die("Connection not successful");
						}


					$result = mysqli_select_db($conn,'prs');

					$query = mysqli_query($conn, "SELECT * FROM staff");
						if(mysqli_num_rows($query) > 0){
								while($row = mysqli_fetch_array($query)){
									$id = $row['staffid'];
									$name = $row['staffname'];

								echo "<li class='list-item'><a href='editstaff.php?id=$id'>$name</a></li>";
								}
						}else{
							echo "No staff registered";
						}

				?>
								</ul>
							</div>
						</div>		
				</div>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>