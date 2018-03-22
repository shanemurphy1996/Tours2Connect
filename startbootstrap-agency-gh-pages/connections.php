<?php
	function db_connect(){
		$servername = "127.0.0.1";
        $username = "x14511863";
        $password = "";
        $dbname = "tours2connect";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
	return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
	