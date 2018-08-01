


<?php

session_start();
$conn = new mysqli("localhost","root","");
		
		if (!$conn) {
		die("Connection not successful");
			}


		$result = mysqli_select_db($conn,'prs');	

		
							$id = $_GET['id'];

							$_SESSION['tid'] = $id;
		
				$query1=mysqli_query($conn,"select * from doctor where doctorid = '$id'");
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
	<title>EDIT DOCTOR RECORD</title>
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

							<li><a href="doctordashboard.php">Dashboard</a></li>
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
			<div class="container">
		<form method="post" class="col-sm-8" action="updatedoctor.php">
				<label for="doctorname">Name:</label>
				<input type="text" class="form-control" name="doctorname" placeholder="Name" value="<?php echo $query2['doctorname']; ?>" /><br />

				<label for="doctoremail">Email:</label>
				<input type="text" class="form-control" name="doctoremail" placeholder="Email" value="<?php echo $query2['doctoremail']; ?>" /><br /><br />

				<label for="doctorphoneno">Phone Number:</label>
				<input type="text" class="form-control" name="doctorphoneno" placeholder="Phone Number" value="<?php echo $query2['doctorphoneno']; ?>" /><br /><br />
				

				<label form="doctorusername">Username</label>
				<input type="text" class="form-control" name="doctorusername" placeholder="Username" value="<?php echo $query2['doctorusername']; ?>" /><br /><br />
		
				<label form="doctorpassword">Password</label>
				<input type="password" class="form-control" name="doctorpassword" placeholder="Password" value="<?php echo $query2['doctorpassword']; ?>" /><br /><br />

				<label for="doctorspecialisation">Date of Birth:</label>
				<input type="text" class="form-control" name="doctorspecialisation" placeholder="Date of Birth" value="<?php echo $query2['doctorspecialisation']; ?>" /><br /><br />

				

				
				

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