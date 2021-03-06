
<?php 
	session_start();
		
	if(!isset($_SESSION))
	{
		header('location:index.php');
		exit;
	}
	
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
</style>
  </head>

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
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#recentTours">Recent Tours</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
            <!--This is for when the user logs in, name will display - Will give option to log out. Not working just yet -->
            <li class="nav-item">
         <!--    <p style="color:#33ff33"> missing ? > php echo $_SESSION['username'];?></p>
              <a href="logout.php"> Logout </a> -->
            </li>
            
            
            
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Tours2Connect!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Services and What we offer</a>
        </div>
      </div>
    </header>



          <!-- Services -->
          <section id="services">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 style="color:#33ff33" class="section-heading text-uppercase">Services</h2>
                  <h3 class="section-subheading text-muted">This is what we offer, and much much more!</h3>
                </div>
              </div>
              
              
              
              <div class="row text-center">
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 style="color:#33ff33" class="service-heading">Tours</h4>
                  <p style="color:#ffff99">Once a tour is live, you have the option it join it. First people who join the tour will be sent more information about the tour.</p>
                </div>
                 <!--  <p class="text-muted">Once a tour is live, you can join a tour there is a limit per tour.
        First people who join the tour will be sent more information about the tour.</p> this was their before incase problems occur. -->
                
                
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-user fa-stack-1x fa-inverse"></i> 
                  </span>
                  <h4 style="color:#33ff33" class="service-heading">Become a tour guide yourself</h4>
                  <p style="color:#ffff99">Sign up as a tour guide and share your knowledge of Irelands greatest attractions</p>
                  
                </div>
      <!--  Sign up as a tour guide and share your knowledge of Irelands greatest attractions</p> this was their before incase problems occur. -->
            
                
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 style="color:#33ff33" class="service-heading">Contact</h4>
                  <p style="color:#ffff99"> We offer communication between the Tour Guides and the users looking for more information</p>
                </div>
              </div>  <!-- We offer communication between the Tour Guides and the users looking for more information</p> this was their before incase problems occur. -->
            </div>
            
            
            <div class="container align-centered aims">
      			 <h2  style="color:#33ff33">Our Aims</h2>
      			<hr class="divider">
      			<p style="color:#ffff99">We aim to bring a completely genuine approach to tours, by giving locals the oppurtunity 
      			    to give a tour of their area of living. This could be a historic or architectural tour.
                  It also gives tourists the opportunity to visit rural areas.<br/></p>
      			
      			<p style="color:#ffff99">
      				<b>-</b> A competitive community environment.</br>
      				<b>-</b> Full tourt control for tourists and companies.</br>
      				<b>-</b> Quick and reliable payouts.
      			</p>
			    <br/>
          </section>

    <!-- ################ Recent Tours #######-->
    <style>
      /* Set height to 100% for body and html to enable the background image to cover the whole page: */
body, html {
    height: 100%
}



/* Position text in the bottom-left corner */


/* Position text in the middle */
.middle {
    position: absolute;
    
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

/* Style the <hr> element */
hr {
    margin: auto;
    width: 40%;
}
    </style>
    
    <script>
      // Set the date we're counting down to
var countDownDate = new Date("May 30, 2018 15:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
    </script>
    
   
    
    
  
    
    
    
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p style="color:#33ff33" id="demo"></p>
<h1 style="color:#33ff33"> COMING SOON</h1>



            
            <h2 style="color:#33ff33" class="section-heading text-uppercase">Recent Tours</h2>
            <h3 style="color:#33ff33" class="section-subheading text-muted">Great experiences below</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
         <!--   <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">  This creates a pop up of item--> 
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/download.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33"> Glendalough</h4>
              <p class="text-muted">Irish Round Towers</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
         <!--   <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/images (1).jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33"> Wexford</h4>
              <p class="text-muted">Coastline tour</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
         <!--   <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Cathal_Bui_Burren_Forest_web_650_435.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33">Cavan</h4>
              <p class="text-muted">Fields Tour</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
          <!--  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/4-day-south-west-ireland-tour-from-dublin-in-dublin-461935.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33"> Cork</h4>
              <p class="text-muted">Coastal Scenic Tour</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
      <!--      <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5-->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/SouthwestCoast.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33"> Southwest</h4>
              <p class="text-muted">Group days out</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
        <!--    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"> -->
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/GiantsCauseway.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4 style="color:#33ff33"> Antrim</h4>
              <p class="text-muted">Giants Causeway tour</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 style="color:#33ff33" class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Tours2Connect</h3>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              
              
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/Idea_Exchange.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33"> August 2017</h4>
                    <h4 style="color:#33ff33" class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Idea was created to begin a new adventure</p>
                  </div>
                </div>
              </li>
              
              
              
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/Checklist.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33">October 2017</h4>
                    <h4 style="color:#33ff33" class="subheading">Tours2Connect was born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Idea was accepted and The Journey to success was born!</p>
                  </div>
                </div>
              </li>
              
              
              
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/Development.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33"> November 2017</h4>
                    <h4 style="color:#33ff33" class="subheading">Transition from idea to reality</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Development of a secure web application begun</p>
                  </div>
                </div>
              </li>
              
              
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/prototype.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33">December 2017</h4>
                    <h4 style="color:#33ff33" class="subheading">Prototype was developed</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">A rough prototype was created</p>
                  </div>
                </div>
              </li>
              
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/Development.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33"> February 2018</h4>
                    <h4 style="color:#33ff33" class="subheading">Development Continues</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">More ideas began to flow, Development continues</p>
                  </div>
                </div>
              </li>
              
               <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/prototype.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 style="color:#33ff33">May 2018</h4>
                    <h4 style="color:#33ff33" class="subheading">Tours2Connect is Complete</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Development Complete</p>
                  </div>
                </div>
              </li>
              
              
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 <a href="register.php">Register</a> with us for amazing tour opportunities!</h2>
          </div>
        </div>
      </div>
    </section>

   

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Any queries before registering? Please contact us!</h3>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" action="mailto:shanemurphyemail1@gmail.com" method="post" novalidate>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

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
