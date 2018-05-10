<?php 
	include '/config.php';
	$db_connection = db_connect();

	$sql = "SELECT id, first_name, category, tour_name, price, 
					region
			FROM tour WHERE TRUE";

			
	//append filters to text if needed
	if(isset($_POST['category']) && $_POST['category'] != "Choose Category"){
		$sql .= " AND category = '".$_POST['category']."'";
	}
	if(isset($_POST['region']) && $_POST['region'] != "Choose Region"){
		$sql .= " AND region = '".$_POST['region']."'";
	}
	
	$result = $db_connection->query($sql);
	$rows = mysqli_fetch_all($result);
	$json = json_encode($rows);
	echo($json);
?>