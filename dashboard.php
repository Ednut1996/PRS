
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
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

							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="logout.php">LOGOUT</a></li>


							  <!-- <li><a href=<?php //echo'?action=LOGOUT'?>>LOGOUT</a></li> -->

							 <?php
									  if (isset($_GET["action"]) && $_GET["action"] == "LOGOUT") {
									 	unset($_SESSION['name']);
									 	header('location:dashboard.php');
									 }
							?>


						</ul>
					</div>
				</div>

			</div>

						<section id="main">
						      <div class="container">
						        <div class="row">
						             <div class="col-md-9">
						                <div class="list-group">
						            		<a href="index.html" class="list-group-item active main-color-bg">
						            		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Dashboard</a>
						           			 <a href="adminlogin.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ADMIN LOGIN <span class="badge"></span></a>
						            		<a href="doctorlogin.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>DOCTOR LOGIN <span class="badge"></span></a>
						           			 <a href="stafflogin.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> STAFF LOGIN <span class="badge"></span></a>
						         		
						         		 </div>

						         	 </div>
						         </div>
						        </div>
						    </section>



				
		   
		   
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>