<?php
	function db_connect(){
		$servername = "127.0.0.1";
        $username = "x14511863";
        $password = "";
        $dbname = "tours2connect";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if (mysqli_connect_error()) {
		    die("Connection failed: " . mysqli_connect_error());
		    //exit();
		} else {
			//echo "Connection successful <br>";
			return $conn;
		}
	}
?>