<?php
//Declaring variables to prevent errors
$first_name = ""; //First name
$last_name = ""; //Last name
$tour_name = ""; //email

$price= ""; //price
$meetingpoint = ""; //meetingpoint 2
$lat = "";
$lng = "";
$error_array = array(); //Holds error messages

if(isset($_POST['register_button'])){

	//Registration form values

	//First name
	$first_name = strip_tags($_POST['first_name']); //Remove html tags
	$first_name = str_replace(' ', '', $first_name); //remove spaces
	$first_name = ucfirst(strtolower($first_name)); //Uppercase first letter
	$_SESSION['first_name'] = $first_name; //Stores first name into session variable

	//Last name
	$last_name = strip_tags($_POST['last_name']); //Remove html tags
	$last_name = str_replace(' ', '', $last_name); //remove spaces
	$last_name = ucfirst(strtolower($last_name)); //Uppercase first letter
	$_SESSION['last_name'] = $last_name; //Stores last name into session variable

	//tour_name
	$tour_name = strip_tags($_POST['tour_name']); //Remove html tags
	$tour_name = str_replace(' ', '', $tour_name); //remove spaces
	$tour_name = ucfirst(strtolower($tour_name)); //Uppercase first letter
	$_SESSION['tour_name'] = $tour_name; //Stores email into session variable

	//email 2
	$price = strip_tags($_POST['price']); //Remove html tags
	$price = str_replace(' ', '', $price); //remove spaces
	$price = ucfirst(strtolower($price)); //Uppercase first letter
	$_SESSION['price'] = $price; //Stores email2 into session variable

	//meetingpoint
	$meetingpoint = strip_tags($_POST['meetingpoint']); //Remove html tags
		$meetingpoint = str_replace(' ', '', $meetingpoint); //remove spaces
	$meetingpoint = ucfirst(strtolower($meetingpoint)); //Uppercase first letter
	$_SESSION['meetingpoint'] = $meetingpoint; //Stores email2 into session variable
	
		//lat
	$lat = strip_tags($_POST['lat']); //Remove html tags
		$lat = str_replace(' ', '', $lat); //remove spaces
	$lat = ucfirst(strtolower($lat)); //Uppercase first letter
	$_SESSION['lat'] = $lat; //Stores email2 into session variable
	
		//lng
	$lng = strip_tags($_POST['lng']); //Remove html tags
		$lng = str_replace(' ', '', $lng); //remove spaces
	$lng = ucfirst(strtolower($lng)); //Uppercase first letter
	$_SESSION['lng'] = $lng; //Stores email2 into session variable
	
$date = date("Y-m-d"); //Current date

	
	



	if(strlen($first_name) > 25 || strlen($first_name) < 2) {
		array_push($error_array, "Your first name must be between 2 and 25 characters<br>");
	}

	if(strlen($last_name) > 25 || strlen($last_name) < 2) {
		array_push($error_array,  "Your last name must be between 2 and 25 characters<br>");
	}

	

	if(strlen($meetingpoint > 30 || strlen($meetingpoint) < 5)) {
		array_push($error_array, "Your meetingpoint must be betwen 5 and 30 characters<br>");
	}


	
	

	$query = mysqli_query($con, "INSERT INTO user VALUES ('', '$first_name', '$last_name', '$username', '$em', '$meetingpoint')");
		array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

		//Clear session variables 
		$_SESSION['first_name'] = "";
		$_SESSION['last_name'] = "";
	
		
	}


?>