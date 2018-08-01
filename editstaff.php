


<?php

session_start();
$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
			}


		$result = mysqli_select_db($conn,'prs');	

		
							$id = $_GET['id'];

							$_SESSION['tid'] = $id;
		
				$query1=mysqli_query($conn,"select * from staff where staffid = '$id'");
				$query2=mysqli_fetch_array($query1);
				// $query3=mysqli_fetch_array($query1);
				// $query4=mysqli_fetch_array($query1);
				// $query5=mysqli_fetch_array($query1);
				// $query6=mysqli_fetch_array($query1);
				// $query7=mysqli_fetch_array($query1);
				// $query8=mysqli_fetch_array($query1);




		if(mysqli_num_rows($query1) > 0){
		?>
		<!DOCTYPE html>
<html>
<head>
	<title>EDIT STAFF RECORD</title>
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

							<li><a href="staffdashboard.php">Dashboard</a></li>
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

			<section id="maineditstaf">
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
		<form method="post" class="col-sm-8" action="updatestaff.php">
				<label for="staffname">Name:</label>
				<input type="text" class="form-control" name="staffname" placeholder="Name" value="<?php echo $query2['staffname']; ?>" /><br />

				<label form="staffusername">Username</label>
				<input type="text" class="form-control" name="staffusername" placeholder="Username" value="<?php echo $query2['staffusername']; ?>" /><br /><br />
		
				<label form="staffpassword">Password</label>
				<input type="password" class="form-control" name="staffpassword" placeholder="Password" value="<?php echo $query2['staffpassword']; ?>" /><br /><br />

				<label for="staffdob">Date of Birth:</label>
				<input type="text" class="form-control" name="staffdob" placeholder="Date of Birth" value="<?php echo $query2['staffdob']; ?>" /><br /><br />

				<label for="staffgender">Gender:</label>
				<input type="text" class="form-control" name="staffgender" placeholder="Gender" value="<?php echo $query2['staffgender']; ?>" /><br /><br />

				<label for="staffemail">Email:</label>
				<input type="text" class="form-control" name="staffemail" placeholder="Email" value="<?php echo $query2['staffemail']; ?>" /><br /><br />

				<label for="staffphoneno">Phone Number:</label>
				<input type="text" class="form-control" name="staffphonenum" placeholder="Phone Number" value="<?php echo $query2['staffphonenum']; ?>" /><br /><br />
				
				<label for="staffjobdesc">Job Description:</label>
				<input type="text" class="form-control" name="staffjobdesc" placeholder="Job Description" value="<?php echo $query2['staffjobdesc']; ?>" /><br /><br />


				
				

		<br />
		 <button type="submit" class="btn btn-success">Submit</button> 

		 </form>
		</div>
		</div>
		 </div>
		</section>

		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>

		
		<?php 
		}else{
			echo 'No results found';
		}
?>