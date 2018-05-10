<?php

include("auth.php");
?>

<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
	
?>
<?php
$sql = 'SELECT * 
		FROM user';
		

?>
 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tours2Connect</title>

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

<style type="text/css">

     
   
    
        body {
    padding-top: 90px;
    background-color:#212F3D;
}
h3 {
  color:#33ff33;
}

.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}


#mainNav {
  background-color: #212529; }
  #mainNav .navbar-toggler {
    font-size: 12px;
    right: 0;
    padding: 13px;
    text-transform: uppercase;
    color: white;
    border: 0;
    background-color: #fed136;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
  #mainNav .navbar-brand {
    color: #fed136;
    font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive; }
    #mainNav .navbar-brand.active, #mainNav .navbar-brand:active, #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
      color: #fec503; }
  #mainNav .navbar-nav .nav-item .nav-link {
    font-size: 90%;
    font-weight: 400;
    padding: 0.75em 0;
    letter-spacing: 1px;
    color: white;
    font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif; }
    #mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
      color: #fed136; }
    </style>
    
    
    
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</style>

<script type="text/javascript">
function idleLogout() {
    var t;
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onmousedown = resetTimer; // catches touchscreen presses
    window.onclick = resetTimer;     // catches touchpad clicks
    window.onscroll = resetTimer;    // catches scrolling with arrow keys
    window.onkeypress = resetTimer;

    function logout() {
        window.location.href = 'register.php';
    }

    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(logout, 600000);  // time is in milliseconds
    }
}
idleLogout();
</script>   
  </head>
<?php
	require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['first_name'])){
		$first_name = stripslashes($_REQUEST['first_name']); // removes backslashes from spent entry
		$first_name = mysqli_real_escape_string($con,$first_name); //escapes special characters in a string
		
		$last_name = stripslashes($_REQUEST['last_name']);//stripslashes removes back slashes
		$last_name = mysqli_real_escape_string($con,$last_name);
		
		$category = stripslashes($_REQUEST['category']);
		$category = mysqli_real_escape_string($con,$category);
		
		$tour_name = stripslashes($_REQUEST['tour_name']);
		$tour_name = mysqli_real_escape_string($con,$tour_name);
		
		$region = stripslashes($_REQUEST['region']);
		$region = mysqli_real_escape_string($con,$region);
		
		$price = stripslashes($_REQUEST['price']);
		$price = mysqli_real_escape_string($con,$price);
		
		$meetingpoint = stripslashes($_REQUEST['meetingpoint']);
		$meetingpoint = mysqli_real_escape_string($con,$meetingpoint);
		
		$date = stripslashes($_REQUEST['date']);
		$date = mysqli_real_escape_string($con,$date);
		
		$lat = stripslashes($_REQUEST['lat']);
		$lat = mysqli_real_escape_string($con,$lat);
		
		$lng = stripslashes($_REQUEST['lng']);
		$lng = mysqli_real_escape_string($con,$lng);
		

	    //md5 function which will transform the code into encrypted data
        $query = "INSERT into `tour` ( 	
first_name,
last_name,
category,
tour_name,
region,
price,
meetingpoint,
date,
lat,
lng) VALUES ('$first_name', '$last_name', '$category','$tour_name', '$region', '$price', '$meetingpoint', '$date', '$lat', '$lng')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='container'>
            
            <div class='col-md-4 col-md-offset-4'>
            <div class='login-panel panel panel-default'><br/><br/>
            <h3> Tour details are now on the Tours page, Follow the link.<br/>Click here to view all  <a href='tours.php'>Tours Available</a> </h3></div></div></div>";
        }
    }
?>



  <body id="page-top">

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
			<a href="settings.php">
				<i class="fa fa-cog fa-lg"></i>
			</a>
			</li>
            
            
              <!--This is for when the user logs in, name will display - Will give option to log out. Not working just yet -->
            <li class="nav-item">
              <p style="color:#33ff33"> <?php echo $_SESSION['username'];?></p>
              <a href="logout.php"> Logout </a>
            </li> 
            
            
           
          </ul>
        </div>
      </div>
    </nav>
    
     <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome Tourguides</div>
          <div class="intro-heading text-uppercase">Let's Create a Tour!</div>
          
        </div>
      </div>
    </header>
    
    <!-- Form -->
    


<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #33ff33}
.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #000000 !important;} .asteriskField{color: red;}
.center {
    margin: auto;
    width: 70%;
    border: 0px solid green;
    padding: -10px;
}
</style>

<div class="center">
<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso" align="center">
 <div class="container-fluid" align="center">
  <div class="row" align="center">
   <div class="col-md-6 col-sm-6 col-xs-12" align="center">
    <form method="post" align="center">
        
        
     <div class="form-group" align="center">
      <label class="control-label requiredField" for="first_name" align="center">
       First Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="first_name" name="first_name" type="text" value="<?php echo $_SESSION['first_name'];?>" placeholder="Please Enter your First Name"  required/>
     </div>
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="last_name">
       Surname
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="last_name" name="last_name" placeholder="Please Enter your surname" type="text" required/>
      <span class="help-block" id="hint_last_name">
       Enter your Surname
      </span>
     </div>
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" placeholder="Enter a valid email address" type="email" required/>
     </div>
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="tour_name" required>
       Tour Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="tour_name" name="tour_name" type="text"/>
     </div>
     
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="price" required>
       Tour Price - €
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="price" name="price" type="number"/>
     </div>
     
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="meetingpoint">
       Meeting Point
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="meetingpoint" name="meetingpoint" type="text" required/>
      <span class="help-block" id="hint_meetingpoint">
       Select the spot in which you want to begin your Tour.
      </span>
     </div>
     
     
      <div class="form-group ">
      <label class="control-label requiredField" for="lat">
       Latitude of Tour
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="lat" name="lat" type="text" required/>
      <span class="help-block" id="hint_lat">
       This will display your tour on the map on the tours area.
       Need help with finding your events latitude?
       Find it <a href="https://www.latlong.net/convert-address-to-lat-long.html" style="color:red" target="_blank">here.</a>
      </span>
      
     
     </div>
     
     <div class="form-group ">
        <label class="control-label requiredField" for="lng">
       Longitude of Tour
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="lng" name="lng" type="text" required/>
      <span class="help-block" id="hint_lng">
       This will display your tour on the map on the tours area.
       Need help with finding your events longitude?
       Find it <a href="https://www.latlong.net/convert-address-to-lat-long.html" style="color:red" target="_blank">here.</a>
      </span>
       
       
       
     </div>
     
     <div class="form-group ">
      <label class="control-label requiredField" for="region">
       Select Region of Tour
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="region" name="region" required>
       <option value="Leinster">
        Leinster
       </option>
       <option value="Munster">
        Munster
       </option>
       <option value="Connaught">
        Connaught
       </option>
       <option value="Ulster">
        Ulster
       </option>
      </select>
      <span class="help-block" id="hint_region">
       Choose from the options above
      </span>
     </div>
     
     
     
     <div class="form-group ">
      <label class="control-label requiredField" for="category">
       Select Category of Tour.
       <span class="asteriskField">
        *
       </span>
      </label>
      <select class="select form-control" id="category" name="category" required>
       <option value="History">
        History
       </option>
       <option value="Sport">
        Sport
       </option>
       <option value="Architecture">
        Architecture
       </option>
       <option value="Adventure">
        Adventure
       </option>
       <option value="Scenic">
        Scenic
       </option>
       <option value="Fun">
        Fun
       </option>
      </select>
      <span class="help-block" id="hint_category">
       Please choose one of the options.
      </span>
     </div>
     
    
     
     <div class="form-group ">
      <label class="control-label requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" min="2018-05-24" max="2020-01-01" type="datetime-local" value="2018-05-22T17:30:00" required/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-default " name="submit" type="submit">
        Submit
       </button>
      
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</div>
    
   
    
    
    
     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 style="color:#33ff33"> <span class="copyright">Copyright &copy; Tours2Connect 2018</span> </h3>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
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

  </body>

</html>

