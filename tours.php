<?php

include("auth.php");

?>
<?php

$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
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
   
    
     

/* table CSS */
    
    
  
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
			color: #33ff33;
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
			
			
            
            
              <!--This is for when the user logs in, name will display - Will give option to log out. Not working just yet -->
            <li class="nav-item">
              <p style="color:#33ff33">welcome <?php echo $_SESSION['username'];?></p>
              <a href="logout.php"> Logout </a>
            </li> 
            
            
           
          </ul>
        </div>
      </div>
    </nav>
    
    
    
   
               
               
               
               <!-- TESTING TESTING TESTING GOOGLE MAPS API TESTING TESTING TESTING -->
         
   


   
  </head>

  <body>
    <div id="map"></div>

    <script>
     
     var customLabel = {
        Sport: {
          label: 'Sp'
        },
        History: {
          label: 'H'
        },
        Adventure: {
          label: 'A'
        },
        Fun: {
          label: 'F'
        },
        Scenic: {
           label: 'Sc'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 53.33833198, lng:-6.285498858},
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;

// 	function downloadUrl(url,callback) {
// 			 var request = window.ActiveXObject ?
// 			   new ActiveXObject('Microsoft.XMLHTTP') :
// 	    		 new XMLHttpRequest;
	
// 		 request.onreadystatechange = function() {
// 			   if (request.readyState == 4) {
// 			    request.onreadystatechange = doNothing;
// 					   callback(request, request.status);
// 				  }
// 				 };
	
// 				 request.open('GET', url, true);
// 			 request.send(null);
// 			}



          // Change this depending on the name of your PHP or XML file
          downloadUrl('/googleapixml.php', function(data) {
            var xml = data.responseXML;
            var tour = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(tour, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var first_name = markerElem.getAttribute('first_name');
              var last_name = markerElem.getAttribute('last_name');
              var category = markerElem.getAttribute('category');
              var tour_name = markerElem.getAttribute('tour_name');
              var region = markerElem.getAttribute('region');
              var price = markerElem.getAttribute('price');
              var meetingpoint = markerElem.getAttribute('meetingpoint');
              var date = markerElem.getAttribute('date');
              
              
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = tour_name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = meetingpoint
              infowincontent.appendChild(text);
              var icon = customLabel[category] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVaIVyx-HZ5wk-g32aJ0ZYCH7i10RZVQ&callback=initMap">
    </script>
  
               
               
               
               
                <!-- END END END OF TESTING TESTING TESTING GOOGLE MAPS API TESTING TESTING TESTING -->
           
          <!-- END END END OF FILTER TESTING --> 
               
               
               <!--FILTER CODE-->

              <script src="http://code.jquery.com/jquery-latest.js"></script> 



 
              <!--#############TOURS DISPLAYED HERE ############# -->
		<row centered>
			
		 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:#33ff33" class="page-header">Tours4You</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
    <!-- enter table from the db -->
    
    	<h1 style="color:#33ff33">Keep Track of up and coming events!</h1>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Category</th>
				<th>Tour Name</th>
				<th>Meeting Point</th>
				<th>Region</th>
				<th>Price €</th>
				<th>Date</th>
				<th> Learn More</th>
				
			</tr>
		</thead>
		<tbody>
		  
		  
	
		  
		<?php

		while ($row = mysqli_fetch_array($query))
		{
   
			echo '<tr>
		
					<td>'.$row['first_name'].'</td></button>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['category'].'</td>
				    <td>'.$row['tour_name'].'</td>
				     <td>'.$row['meetingpoint'].'</td>
				    <td>'.$row['region'].'</td>
				    <td>'.$row['price'].'</td>
				     <td>'.$row['date'].'</td>
				    <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <a href=tourinfo.php?'.$row[id].'> Learn More</a></td>


				</tr>';
		}?>
	
</div>
	
		
		
		</tbody>
		<tfoot>

		</tfoot>
	</table>

						<div class="dataFillUp">		
							
						</div>
						</div>	
				
				</div>	
				<!--Desktop Version End -->
				</br>
				

			

 <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 style="color:#33ff33"> <span class="copyright">Copyright &copy; Tours2Connect 2018</span> </h5>
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
    <!-- Header -->