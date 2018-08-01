<?php session_start(); ?>
<?php 
//unset($_SESSION['name']);
	if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}

?>

<?php


						$servername = "localhost";
						$username="username";
						$password="";


						$conn = new mysqli("localhost","root","");

						
						if (!$conn) {
							die("Connection not successful");
							} else

							{

								$result = mysqli_select_db($conn,'prs');

								}

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

							if (!$result) 
							{
								die ('could not enter data:' .mysqli_error($conn));

							}

							echo "entered new patient record";


?>