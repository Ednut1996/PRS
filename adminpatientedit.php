
<!DOCTYPE html>
<html>
<head>
	<title>PATIENT EDIT LIST</title>

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


							
						</ul>
					</div>
				</div>

			</div>
				
				
						<section id="mainadmpatedit">
							 <div class="container">
								 <div class="row">
							 <div class="col-md-3">
								                <div class="list-group">
						            		<a href="index.html" class="list-group-item active main-color-bg">
						            		<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>  Dashboard</a>
						           			 <a href="adminregisterpatient.html"" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> REGISTER PATIENT <span class="badge"></span></a>
						            		<a href="adminpatientedit.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>UPDATE PATIENT <span class="badge"></span></a>
						           			 <a href="adminviewpatient.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> DELETE PATIENT <span class="badge"></span></a>
						           			 <a href="adminviewpatient.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> VIEW PATIENT <span class="badge"></span></a>
						           			 <a href="adminrecordpatienttreatment.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> RECORD PATIENT TREATMENT DETAILS <span class="badge"></span></a>
						           			 <a href="adminaddnewstaff.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> REGISTER STAFF <span class="badge"></span></a>
						           			 <a href="adminstaffedit.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> UPDATE STAFF <span class="badge"></span></a>
						           			 <a href="adminviewstaff.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> DELETE STAFF <span class="badge"></span></a>
						           			  <a href="adminviewstaff.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> VIEW STAFF <span class="badge"></span></a>
						           			 <a href="registerdoctor.html" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> REGISTER DOCTOR <span class="badge"></span></a>
						           			 <a href="adminstaffedit.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> UPDATE DOCTOR <span class="badge"></span></a>
						           			 <a href="adminviewstaff.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> DELETE DOCTOR <span class="badge"></span></a>
						           			 <a href="adminviewdoctor.php" class="list-group-item"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> VIEW DOCTOR <span class="badge"></span></a>
						           			 
						         		 </div>

						         	 </div>





				<div class="col-sm-6">
				<h3> EDIT PATIENT INFORMATION</h3>	
						<div class="col-lg-12">
							<div class="col-sm-4">
								<ul class="list-group">
													<?php 
						$conn = new mysqli("localhost","root","");
		
					if (!$conn) {
					die("Connection not successful");
						}


					$result = mysqli_select_db($conn,'prs');

					$query = mysqli_query($conn, "SELECT * FROM patient");
						if(mysqli_num_rows($query) > 0){
								while($row = mysqli_fetch_array($query)){
									$id = $row['patientid'];
									$name = $row['patientname'];

								echo "<li class='list-item'><a href='editpatient.php?id=$id'>$name</a></li>";
								}
						}else{
							echo "No staff registered";
						}

				?>
								</ul>
							</div>
				</div>
				</div>				
				</div>

				</div>
				</section>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>