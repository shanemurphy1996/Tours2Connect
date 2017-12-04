<!DOCTYPE html>
<?php 
	
	require_once "connections.php"; 
	if (isset($_GET['tour'])){
		$game = $_GET['tour'];	
	}
	$sql = "SELECT * FROM tour";
	$db_connection = db_connect();
	$result = $db_connection->query($sql);

	$pageNumber= 1;
?>


<link href="css/tours.css" rel="stylesheet"/>


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

     
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
   
    
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
              <a class="nav-link js-scroll-trigger" href="registration.php">Register</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registration.php">Login</a>
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
            
            
            
           
          </ul>
        </div>
      </div>
    </nav>
                       <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 53.33833198, lng:-6.285498858},
          zoom: 6
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKzbCUOaHVZQPu4kvEWSdnmsM9je3ywUs&callback=initMap"
    async defer></script>
               
               
               
                    <!-- content section -->
<section id="content">
	<!-- container -->
	<div class="container filtersAndList">
		<row centered>
			
			<?php
				include 'tours/filter.php';
            ?>
			
			<!-- tour list -->
			<column class="bothColumns" cols="10">
				<!--Desktop Version Start-->
				<div class="tourContainer xs-hidden">			
					<div class="toursList">
						<div class="onetour tourListHeader">
										<row>
											<column cols="4"><div class="width-12 giveMinWidth">Name</div></column>
											<column cols="2"><div class="width-12 giveMinWidth">Price</div></column>
											<column cols="1" class="sm-hidden"><div class="width-12 giveMinWidth">Region</div></column>
											<column cols="1"><div class="width-12 giveMinWidth">Tour Members</div></column>
											<column cols="3"><div class="width-12 giveMinWidth">Start date/time</div></column>											
										</row>						
						</div>			
                        <!-- PHP query loops through database and outputs data -->
						<div class="dataFillUp">		
							
						</div>
						</div>	
					<div class="bottomNavigator">
						<row centered>			
							<ul class="pagination" centered>
								<li centered><a href="javascript:firstPage()" id="firstPage" href="#">|&larr;</a></li>
								<li centered><a href="javascript:prevPage()" id="prevPage" href="#">&larr;</a></li>
								<li centered><span id="currentPage"></span> of <span id="totalPages"></span></li>
								<li centered><a href="javascript:nextPage()" id="nextPage" href="#">&rarr;</a></li>
								<li centered><a href="javascript:lastPage()" id="lastPage" href="#">&rarr;|</a></li>
							</ul>
						</row>
					</div>	
				</div>	
				<!--Desktop Version End -->
				
				<!--Mobile Version Start -->
				<div class="sm-hidden-up blockCoverage">
					<div class="mobileDataFillUp">
						
					</div>
					<div class="bottomNavigatorM">	
						<div class="myPagination">							
								<a href="javascript:firstPage()" id="firstPageM" > <div class="colorChange mobilePagination">|&larr;</div></a>
								<a href="javascript:prevPage()" id="prevPageM"><div class="colorChange mobilePagination">&larr;</div></a>
								<div class="mobilePagination1" id="currentPageM"></div>
								<div class="mobilePagination1">of</div>
								<div class="mobilePagination1" id="totalPagesM"></div>
								<a href="javascript:nextPage()" id="nextPageM"><div class="colorChange mobilePagination" centered>&rarr;</div></a>
								<a href="javascript:lastPage()" id="lastPageM"><div class="colorChange mobilePagination" centered>&rarr;|</div></a>
						</div>
					</div>	
				</div>
				<!--Mobile Version End -->
				
			</column> <!-- ./tour list end -->
		</row><!-- ./row end -->
	</div>	<!-- ./ container end -->
</section><!-- content end -->


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
    <!-- Header -->