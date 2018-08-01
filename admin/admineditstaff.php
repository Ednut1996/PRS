


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
		<form method="post" action="updatestaff.php">
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
		 <button type="submit" class="btn btn-success">Submit</button> </button>

		</form>
		<?php 
		}else{
			echo 'No results found';
		}
?>