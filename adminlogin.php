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

		
		$adminname = $_POST['adminusername'];
		$password = $_POST['adminpassword'];

		$query = mysqli_query($conn, "SELECT * FROM admin WHERE adminusername = '$adminname' ");

			
		if(mysqli_num_rows($query) > 0){

					while($rows = mysqli_fetch_array($query)){
						$dbpass = $rows['adminpassword'];
						$dbname = $rows['adminusername'];
						$dbid = $rows['adminid'];
				}

					if($dbname == $adminname && $password == $dbpass){
						$_SESSION['name'] = $dbname;
						header('location: admindashboard.php');
					}
					else{
						echo "Incorrect username or password";
					}


		}else{
			echo "Username does not exist";
}	

?>