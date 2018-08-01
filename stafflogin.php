<?php
	session_start();
	if (!isset($_SESSION['name'])) {
			header('location :dashboard.php');	

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

		
		$staffname = $_POST['staffusername'];
		$staffpassword = $_POST['staffpassword'];

		$query = mysqli_query($conn, "SELECT * FROM staff WHERE staffusername = '$staffname' ");

			
		if(mysqli_num_rows($query) > 0){

					while($rows = mysqli_fetch_array($query)){
						$dbpass = $rows['staffpassword'];
						$dbname = $rows['staffusername'];
						$dbid = $rows['staffid'];
				}

					if($dbname == $staffname && $staffpassword == $dbpass){
						$_SESSION['name'] = $dbname;
						header('location: staffdashboard.php');
					}
					else{
						echo "Incorrect username or password";
					}


		}else{
			echo "Username does not exist";
}	

?>