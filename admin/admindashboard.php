<?php session_start(); ?>
<?php 
unset($_SESSION['name']);
	//if(!isset($_SESSION['name'])){
		//header('location: index.html');
	//}

?>
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
									//  if (isset($_GET["action"]) && $_GET["action"] == "LOGOUT") {
									// 	unset($_SESSION['name']);
									// 	header('location:index.html');
									// }
							?>


						</ul>
					</div>
				</div>

			</div>
				<p class="text"></p> <?php //echo $_SESSION[//'name']; ?></p> 

				<div class="container">
				 				
					<h3><b>ADMIN</b></h3>	
					<div class="patient">
					<div class="patient1">
					
						  <img src="images/grid-img1.png">
					</div>
					
						  <h3>Patients</h3>
						  <div class="button"><span><a href="index.html"><b>LOGIN AS ADMIN</b></a></span></div> 
						  <div class="button"><span><a href="registerpatient.html"><b>REGISTER PATIENT</b></a></span></div>
						  <div class="button"><span><a href="patientedit.php"><b>UPDATE PATIENT</b</a></span></div>
						  <div class="button"><span><a href="viewpatient.php"><b>DELETE PATIENT</b></a></span></div>
						  <div class="button"><span><a href="viewpatient.php"><b>VIEW PATIENT</b></a></span></div>
						     
				</div>		
				  
						 <h3>STAFF</h3>
						  <div class="button"><span><a href="addnewstaff.html"><b>REGISTER STAFF</b></a></span></div>	
						  <div class="button"><span><a href="staffedit.php"><b>UPDATE STAFF</b></a></span></div>
						  <div class="button"><span><a href="viewstaff.php"><b>DELETE STAFF</b></a></span></div>
						  <div class="button"><span><a href="viewstaff.php"><b>VIEW STAFF</b></a></span></div>
						 <div class="button"><span><a href="recordpatienttreatment.html"><b>RECORD PATIENT TREATMENT DETAILS</b></a></span></div>

						 <h3><b>STAFF</b></h3>
						
						 <div class="button"><span><a href="stafflogin.html"><b>STAFF LOGIN</b></a></span></div>
						 <div class="button"><span><a href="staffedit.php"><b>UPDATE STAFF</b></a></span></div>
						  <div class="button"><span><a href="registerpatient.html"><b>REGISTER PATIENT</b></a></span></div>						 <div class="button"><span><a href="viewpatient.php"><b>VIEW PATIENT</b></a></span></div>
					
						 
						  

					
				
		   </div>
		   
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>