<?php session_start(); 
 
//unset($_SESSION['name']);
	if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW PATIENT</title>

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

							<li><a href="dashboard.php">Dashboard</a></li>
							<li><a href="logout.php">LOGOUT</a></li>


							
						</ul>
					</div>
				</div>

			</div>
			
				
			
			<section id="mainadmviewpat">
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
			<h1> VIEW PATIENT INFORMATION</h1>
			<table class="table table-striped table-bordered">
				<tr><th>patientname</th> <th>patientdob</th> <th>patientgender</th> <th>patientphonenum</th> <th>patientemail</th> <th>patientweight</th> <th>patientheight</th> <th>patientbloodpressure</th> <th>patienttemperature</th> <th>patientbillhistory</th> </tr>
				<tr><td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> <td> </tr>


				<?php



				$conn = new mysqli("localhost","root","");

				if (!$conn) {
				die("Connection not successful");
				}

				$result = mysqli_select_db($conn,'prs');

				$output = mysqli_query($conn,"SELECT * FROM patient");
				while($row = mysqli_fetch_array($output)){
				$id = $row['patientid'];

				?>
				<tr>
				<td><?php echo $row['patientname'];?></td>
				<td><?php echo $row['patientdob'];?></td>
				<td><?php echo $row['patientgender'];?></td>
				<td><?php echo $row['patientphonenum'];?></td>
				<td><?php echo $row['patientemail'];?></td>
				<td><?php echo $row['patientweight'];?></td>
				<td><?php echo $row['patientheight'];?></td>
				<td><?php echo $row['patientbloodpressure'];?></td>
				<td><?php echo $row['patienttemperature'];?></td>
				<td><?php echo $row['patientbillhistory'];?></td>
				<td> <?php echo "<a href='?id=$id'>DELETE</a>"; ?></td>
				</tr>



				<?php

					}
				?>


					<?php

					if (isset($_GET['id']))
					{
						$output = $_GET['id'];

						$query = "DELETE FROM patient WHERE patientid = '$output'";

						mysqli_query($conn,$query);
					}


					?>









				</table>
				</div>
				</div>
			</div>
		</section>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>