<?php
//Declaring variables to prevent errors
$experience = ""; 

$gigsplayed = ""; 
$location = ""; 
$reliability = "";

if(isset($_POST['update_details'])){
	

	$experience = strip_tags($_POST['up_experience']); //Remove html tags
	$exerience = str_replace(' ', '', $experience); //remove spaces
	$experience = ucfirst(strtolower($experience)); //Uppercase first letter
	$_SESSION['up_experience'] = $experience; //Stores first name into session variable


	
	$toursgiven = strip_tags($_POST['up_toursgiven']); //Remove html tags
	$toursgiven = str_replace(' ', '', $toursgiven); //remove spaces
	$toursgiven = ucfirst(strtolower($toursgiven)); //Uppercase first letter
	$_SESSION['up_toursgiven'] = $toursgiven; //Stores email into session variable


	$location = strip_tags($_POST['up_location']); //Remove html tags
	$location = str_replace(' ', '', $location); //remove spaces
	$location = ucfirst(strtolower($location)); //Uppercase first letter
	$_SESSION['up_location'] = $location; //Stores email2 into session variable


	$reliability = strip_tags($_POST['up_reliablity']); //Remove html tags
	$reliability = str_replace(' ', '', $reliability); //remove spaces
	$reliability = ucfirst(strtolower($reliability)); //Uppercase first letter
	$_SESSION['up_reliability'] = $reliability; //Stores email2 into session variable


	
	    $query = mysqli_query($con, "INSERT INTO users VALUES ($experience, $gigsplayed, $location ,$reliability)");
		array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

		//Clear session variables 
	
	}


?>