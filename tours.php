
<?php

$db_host = 'localhost'; // Server Name
$db_user = 'x14511863'; // Username
$db_pass = ''; // Password
$db_name = 'tours2connect'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM tour';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
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







<!-- table CSS -->
    
    
    	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>

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
        t = setTimeout(logout, 50000000);  // time is in milliseconds
    }
}
idleLogout();
</script> 
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
              <a class="nav-link js-scroll-trigger" href="index.php">Services</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../classes/register.php">Register</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../classes/register.php">Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Recent Tours</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            
              <!--This is for when the user logs in, name will display - Will give option to log out. Not working just yet -->
            <li class="nav-item">
              <p style="color:#33ff33"> <?php echo $_SESSION['username'];?></p>
              <a href="../index.php">Log Out <?php unset($_SESSION['username']);?></a>
            </li>
            
            
           
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- THIS IS THE GOOGLE API-->
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
               
    
		<row centered>
			
		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:#33ff33" class="page-header">Tours4You</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
    <!-- enter table from the db -->
    
    	<h1 style="color:#33ff33">Keep Track Of up and coming events!</h1>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>first_name</th>
				<th>last_name</th>
				<th>category</th>
				<th>tour_name</th>
				<th>region</th>
				<th>price</th>
				
				
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row = mysqli_fetch_array($query))
		{

			echo '<tr>
					<td>'.$row['first_name'].'</td>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['category'].'</td>
				    <td>'.$row['tour_name'].'</td>
				    <td>'.$row['region'].'</td>
				    <td>'.$row['price'].'</td>
				    

				</tr>';

		}?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>

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