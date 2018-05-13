<?php 
require 'config.php';
include("settings_handler.php");

include("User.php");



if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM user WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}


?>
<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:register.php');
		exit;
	}
	
?>


 <style> 
 div{
 	background-color: #212F3C;
 }
 </style>
<link href="css/tours.css" rel="stylesheet"/>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tours2Connect</title>

<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <div class="profile_details column">
				<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
			
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">



 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Tours2Connect</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Services</a>
            </li>
            
            
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Recent Tours</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tours.php">Up&Coming Tours</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="createTour.php">Create Tour</a>
            </li>
            
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Contact</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="niceprofilepage.php">Profile</a>
            </li>
			
			
			 <li class="nav-item">
			<a href="settings.php">
				<i class="fa fa-cog fa-lg"></i>
			</a>
			</li>
            
            
              <!--This is for when the user logs in, name will display - Will give option to log out. Not working just yet -->
            <li class="nav-item">
              <p style="color:#33ff33">welcome <?php echo $_SESSION['username'];?></p>
              <a href="logout.php"> Logout </a>
            </li> 
            
            
           
          </ul>
        </div>
      </div>
    </nav>
    </head>
	<body>
		<br><br><br>
<div class="profile_details column">
			</br>
				
			</br>
			</br>
				
			</br>
			<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <div class="profile_details column">
				<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<h4>Account Settings</h4>
	

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM user WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	?>

	<form action="settings.php" method="POST">
		First Name: <input type="text" name="first_name" value="<?php echo $first_name; ?>" id="settings_input"><br>
		Last Name: <input type="text" name="last_name" value="<?php echo $last_name; ?>" id="settings_input"><br>
		Email: <input type="text" name="email" value="<?php echo $email; ?>" id="settings_input"><br>

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_details" value="Update Details" class="info settings_submit"><br>
	</form>

	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		Old Password: <input type="password" name="old_password" id="settings_input"><br>
		New Password: <input type="password" name="new_password_1" id="settings_input"><br>
		New Password Again: <input type="password" name="new_password_2" id="settings_input"><br>

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
	</form>

	<h4>Close Account</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>