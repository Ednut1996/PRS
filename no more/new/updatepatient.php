<?php
session_start();

		$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
		}


		$result = mysqli_select_db($conn,'prs');


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

							$id = $_SESSION['tid'];

		$sql = "Update patient set patientname = '$name', patientdob = '$dob', patientgender = '$gender', patientphonenum = '$phoneno', patientemail ='$email', patientweight = '$weight',  patientheight = '$height',  patientbloodpressure = '$bloodpressure', patienttemperature = '$temperature', patientbillhistory = '$billhistory'  WHERE patientid = '$id' ";

		$result = mysqli_query($conn,$sql);

		if ($result)

		{
		echo "update successful";
		echo mysqli_error($conn);
		}

		else {
		echo "not successful";
		}

?>