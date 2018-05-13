<?php
if(isset($_POST["submit"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tours2connect";

$conn = new mysqli($servername, $username, $password, $dbname);
	
	$_SESSION['username'];

	$email=$_POST["email"];
    $bio=$_POST["bio"];
	
	
	
	
	$query = mysqli_query($con, "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email', bio='$bio' WHERE username='$userLoggedIn'");


		
	}
?>

