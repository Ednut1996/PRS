	<?php //session_start(); ?>
<?php 
//unset($_SESSION['name']);
	//if(!isset($_SESSION['name'])){
		//header('location: dashboard.php');
	//}

?>


<?php

session_start();
$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
			}


		$result = mysqli_select_db($conn,'prs');	

		
							$id = $_GET['id'];

							$_SESSION['tid'] = $id;
		
				$query1=mysqli_query($conn,"select * from patient where patientid = '$id'");
				$query2=mysqli_fetch_array($query1);

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


		
			<form method="post" action="updatepatient.php">
			<label for="patientname">Name:</label>
				<input type="text" class="form-control" name="patientname" placeholder="Name" value="<?php echo $query2['patientname']; ?>" /><br />
				
				<label for="patientdob">Date of Birth:</label>
				<input type="text" class="form-control" name="patientdob" placeholder="Date of Birth" value="<?php echo $query2['patientdob']; ?>" /><br />
				
				<label for="patientgender">Gender:</label>
				<input type="text" class="form-control" name="patientgender" placeholder="Gender" value="<?php echo $query2['patientgender']; ?>" /><br />
				
				<label for="patientphoneno">Phone Number:</label>
				<input type="text" class="form-control" name="patientphonenum" placeholder="Phone Number" value="<?php echo $query2['patientphonenum']; ?>" /><br />
				
				<label for="patientemail">Email:</label>
				<input type="text" class="form-control" name="patientemail" placeholder="Email" value="<?php echo $query2['patientemail']; ?>" /><br />
				
				<label for="patientweight">Weight:</label>
				<input type="text" class="form-control" name="patientweight" placeholder="Weight" value="<?php echo $query2['patientweight']; ?>" /><br />
				
				<label for="patientheight">Height:</label>
				<input type="text" class="form-control" name="patientheight" placeholder="Height" value="<?php echo $query2['patientheight']; ?>" /><br />
				
				<label for="patientbloodpressure">Blood Pressure:</label>
				<input type="text" class="form-control" name="patientbloodpressure" placeholder="Blood Pressure" value="<?php echo $query2['patientbloodpressure']; ?>" /><br />

				<label for="patienttemperature">Patient Temperature:</label>
				<input type="text" class="form-control" name="patienttemperature" placeholder="Patient Temperature" value="<?php echo $query2['patienttemperature']; ?>" /><br />

				<label for="patientbillhistory">Patient Bill History:</label>
				<input type="text" class="form-control" name="patientbillhistory" placeholder="Patient Bill History" value="<?php echo $query2['patientbillhistory']; ?>" /><br />




				<br />
				 <button type="submit" class="btn btn-success">Submit</button> </button>

				 </form>
				 </div>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>

  				  
</body>
</html>

 

				<?php 
		}else{
			echo 'No results found';
		}
?>