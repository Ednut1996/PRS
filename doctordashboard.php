<?php session_start();
		if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DOCTOR DASHBOARD</title>
			<meta charset="utf-8">
    			<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		  		<link href="css/bootstrap.min.css" rel="stylesheet">
  		  		<link rel="stylesheet" type="text/css" href="style.css">
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

							<li><a href="doctordashboard.php">Dashboard</a></li>
							<li><a href="logout.php">LOGOUT</a></li>

						</ul>
					</div>
				</div>
				</div>


						<div class="container">

								<div class="staff">
						  		<img src="images/grid-img1.png">
					</div>

					<h3><b>DOCTOR</b></h3>
						
						 
						 <div class="button"><span><a href="doctoredit.php"><b>UPDATE DOCTOR</b></a></span></div>
						  <div class="button"><span><a href="registerdoctor.html"><b>REGISTER DOCTOR</b></a></span></div>						 <div class="button"><span><a href="viewdoctor.php"><b>VIEW DOCTOR</b></a></span></div>
						    
						  
						
						</div>
			

</body>
</html>