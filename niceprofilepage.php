<?php

require 'config.php';
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
 <div class="profile_details column">
			</br>
				
			</br>
			</br>
				
			</br>
			<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <div class="profile_details column">
				<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
			
			<div class="container">
				<form action="editprofile.php" method="POST">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  					<a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> </a>
			  					<br>
			  				<label style="color:#33ff33" for="username">Username</label>
					    	<input readonly="readonly" class="form-control" name="user name" value="<?=$username;?>" placeholder="<?php echo $user ['username']; ?>">
				  		</div>
				  	
				  		<div class="form-group">
			  				<label style="color:#33ff33" for="first_name">First Name</label>
					    	<input readonly="readonly" class="form-control" name="first_name" value="<?=$first_name?>" placeholder="<?php echo $user ['first_name']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
			  				<label style="color:#33ff33" for="up_influences">Last Name</label>
					    	<input readonly="readonly" class="form-control" name="last_name" value="<?=$last_name;?>" placeholder="<?php echo $user ['last_name']; ?>">
				  		</div>
				  		
				  		
					  	<div class="form-group">
			  				<label style="color:#33ff33" for="email">Email</label>
					    		<input readonly="readonly" class="form-control" name="email" value="<?=$email;?>" placeholder="<?php echo $user ['email']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
				  		<a href="index.php" style="color:#33ff33"><h2> Any Questions about your profile?  Contact us </h2></a> 
				  			  </div>
					  
			  		</div>
			  	
				</form>
			</div>
</div>
</body>
<br><br><br><br><br><br>
<!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 style="color:#33ff33"> <span class="copyright">Copyright &copy; Tours2Connect 2018</span> </h5>
          </div>
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
