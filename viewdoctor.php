<?php session_start();
	if(!isset($_SESSION['name'])){
		header('location: dashboard.php');
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>VIEW DOCTOR</title>

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
				
			


			<div class="container">
			<h1> VIEW DOCTOR INFORMATION</h1>
			<table class="table table-striped table-bordered">
				<tr><th>doctorname</th> <th>doctoremail</th>  <th>doctorphoneno</th> <th>doctorusername</th> <th>doctorpassword</th> <th>doctorspecialisation </th> <th></th> </tr>
				<tr><td> </td> <td> </td>  <td> </td> <td> </td> <td> </td> <td> </td> <td> </td> </tr>


				<?php



				$conn = new mysqli("localhost","root","");

				if (!$conn) {
				die("Connection not successful");
				}

				$result = mysqli_select_db($conn,'prs');

				$output = mysqli_query($conn,"SELECT * FROM doctor");
				while($row = mysqli_fetch_array($output)){
				$id = $row['doctorid'];

				?>
				<tr>
				<td><?php echo $row['doctorname'];?></td>
				<td><?php echo $row['doctoremail'];?></td>
				<td><?php echo $row['doctorphoneno'];?></td>
				<td><?php echo $row['doctorusername'];?></td>
				<td><?php echo $row['doctorpassword'];?></td>
				<td><?php echo $row['doctorspecialisation'];?></td>
				<td> <?php echo "<a href='?id=$id'>DELETE</a>"; ?></td>
				</tr>



				<?php

					}
				?>


					<?php

					if (isset($_GET['id']))
					{
						$output = $_GET['id'];

						$query = "DELETE FROM staff WHERE staffid = '$output'";

						mysqli_query($conn,$query);
					}


					?>









				</table>
				</div>

				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
  				 <script src="js/bootstrap.min.js"></script>
 
</body>
</html>