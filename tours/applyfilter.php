<?php 
	include '/connections.php';
	$db_connection = db_connect();

	$sql = "SELECT id, category, tour_name, price, 
					region, tour_members, tour_max, tour_start
			FROM tour WHERE TRUE";

			
	//append filters to text if needed
	if(isset($_POST['tour']) && $_POST['tour'] != "Choose Tour"){
		$sql .= " AND category = '".$_POST['tour']."'";
	}
	if(isset($_POST['region']) && $_POST['region'] != "Choose Region"){
		$sql .= " AND region = '".$_POST['region']."'";
	}
	
	$result = $db_connection->query($sql);
	$rows = mysqli_fetch_all($result);
	$json = json_encode($rows);
	echo($json);
?>