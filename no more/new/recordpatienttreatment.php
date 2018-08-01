<?php session_start(); ?>
<?php 
//unset($_SESSION['name']);
	if(!isset($_SESSION['name'])){
		header('location: index.html');
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
									$staffid =$_POST['staffid'];
									$treatmentdetails =$_POST['whatpatientistreatedfor'];
									$staffrecorded =$_POST['staffthatrecorded'];
									$treatmentdate =$_POST['date'];
									$treatmenttime =$_POST['time'];			
									$treatmentbill =$_POST['billforpatienttreatment'];
									$billstatus =$_POST['patientbillstatus'];


										$sql = "INSERT INTO patienttreatmentdetails(patientname,staffid,whatpatientistreatedfor,staffthatrecorded,date,time,billforpatienttreatment,patientbillstatus)VALUES ('$name','$staffid','$treatmentdetails','$staffrecorded','$treatmentdate','$treatmenttime','treatmentbill','$billstatus')";

												$result = mysqli_query($conn,$sql);

														if (!$result) 
															{
																die ('could not enter data:' .mysqli_error($conn));

															}

															echo "entered new patient treatment details record";



									

?>