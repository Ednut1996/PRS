
<?php
		
		include("include.php");

			if (isset($_POST['send'])){
							$name =$_POST['patientname'];
							$dob =$_POST['patientdob'];
							$gender =$_POST['patientgender'];
							$phoneno =$_POST['patientphonenum'];
							$email =$_POST['patientemail'];
							$weight =$_POST['patientweight'];			
							$height =$_POST['patientheight'];
							$bloodpressure =$_POST['patientbloodpressure'];
							$temperature =$_POST['patienttemperature'];
							$billhistory =$_POST['patientbillhistory'];

							$sql= "INSERT INTO patient(patientname,patientdob,patientgender,patientphonenum,patientemail,patientweight,patientheight,patientbloodpressure,patienttemperature,patientbillhistory)VALUES('$name','$dob','$gender','$phoneno','$email','$weight','$height','$bloodpressure','$temperature','$billhistory')";

							$result = mysqli_query($conn,$sql);
							if(!$result)
							{
								die('could not enter data:' .mysqli_error($conn));
							}
							echo "entered new patient record";
							}

							
						
							

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register Patient</title>

				<meta charset="utf-8">
    			<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		  		<link href="css/bootstrap.min.css" rel="stylesheet">
		 
</head>
<body>
				
				
				<div class="container">
				<h1>REGISTER PATIENT</h1>
				<form method="POST">
				
				<div class="form-group">

				<label for="patientname">Name:</label>
				<input type="text" class="form-control" name="patientname" placeholder="Name">
				
				</div>

				<div class="form-group">

				<label for="patientdob">Date of Birth:</label>
				<input type="text" class="form-control" name="patientdob" placeholder="Date of Birth">
				
				</div>

				<div class="form-group">

				<label for="patientgender">Gender:</label>
				<input type="text" class="form-control" name="patientgender" placeholder="Gender">
				
				</div>

				<div class="form-group">

				<label for="patientphoneno">Phone Number:</label>
				<input type="text" class="form-control" name="patientphonenum" placeholder="Phone Number">
				
				</div>


				<div class="form-group">

				<label for="patientemail">Email:</label>
				<input type="text" class="form-control" name="patientemail" placeholder="Email">
				
				</div>


				
				<div class="form-group">

				<label for="patientweight">Weight:</label>
				<input type="text" class="form-control" name="patientweight" placeholder="Weight">
				
				</div>

				<div class="form-group">

				<label for="patientheight">Height:</label>
				<input type="text" class="form-control" name="patientheight" placeholder="Height">
				
				</div>

				<div class="form-group">

				<label for="patientbloodpressure">Blood Pressure:</label>
				<input type="text" class="form-control" name="patientbloodpressure" placeholder="Blood Pressure">
				
				</div>

				<div class="form-group">

				<label for="patienttemperature">Temperature:</label>
				<input type="text" class="form-control" name="patienttemperature" placeholder="Temperature">
				
				</div>

				
				<div class="form-group">

				<label for="patientbillhistory">Bill History:</label>
				<input type="text" class="form-control" name="patientbillhistory" placeholder="Bill History">
				
				</div>
	
				 <button type="submit" class="btn btn-success" name="send">Submit</button> </button>




				</form>
				
				</div>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>