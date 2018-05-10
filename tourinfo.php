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
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


<style type="text/css">

     
   
    
        body {
    padding-top: 90px;
    background-color:#212F3D;
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
		
		th{
		  background-color:#508abb;
		}
		td{
		  background-color:#f2f2f2;
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
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
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



   
   
   <!-- Header -->
    <header class="masthead">
      
        <div class="intro-text">
          <div class="intro-lead-in">    <?php
          
   
          
          $myquery=$_SERVER["QUERY_STRING"];
          echo $myquery;
                                            $sql = "SELECT tour_name FROM tour WHERE id = '$myquery'";
                                            $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                              echo " Welcome To The Tour: " . $row["tour_name"]. "<br>" ;
                                             
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                ?>
          <div class="intro-heading text-uppercase"><h3>See tour details below!</h3></div>
        
        
      </div>
      <!-- Services -->
          <section id="services">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 style="color:#33ff33" class="section-heading text-uppercase">Tour Information</h2>
                  <h3 class="section-subheading text-muted">This is what we offer, and much much more!</h3>
                </div>
                
                	<table class="data-table">
		
		<thead>
			<tr>
				
				
			</tr>
		</thead>
                 <?php
                                            $sql = "SELECT first_name, last_name, tour_name, category, meetingpoint, price, date, attendance FROM tour WHERE id ='$myquery'";
                                            // echo $myquery;
                                           
                                            $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                        // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                              echo 
                                               
                '<tr>
                    
                    <th>First Name:</th>
                   <td> '.$row["first_name"].'</td>
                   </tr>
                   <th>Surname</th>
                   <td> '.$row["last_name"].'</td>
                   </tr>
                
                   <th>Tour Name:</th>
                   <td> '.$row["tour_name"].'</td>
                   </tr>
                   
                   <tr>
                   <th>Category</th>
                   <td>'.$row["category"].'</td>
                  </tr>
                   
                   <tr>
                   <th>Meeting Point</th>
                   <td>'.$row["meetingpoint"].'</td>
                  </tr>
                  <tr>
                   <th>Price</th>
                   <td>'.$row["price"].'</td>
                  </tr>
                  
                  <tr>
                  <th> 
                  Attendance:
                  </th>
                  <td>'.$row["attendance"].'</td>
                  </tr>
                  
                  
                  
               </tr>';
  
                                      
                                              
                                               }
                                                } else {
                                                    echo "0 results";
                                                }
                                                ?>
                                                



              </div>
              
             
              
              
              
                          <table style ="width:100%">
                <tr>
                   
               </tr>
               
               
     
               
               
               
               
                 
<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>

    // Render the PayPal button

    var CREATE_PAYMENT_URL  = 'https://my-store.com/paypal/create-payment';
    var EXECUTE_PAYMENT_URL = 'https://my-store.com/paypal/execute-payment';

    paypal.Button.render({

        // Set your environment

        env: 'sandbox', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'checkout',
            size:  'large',    // small | medium | large | responsive
            shape: 'pill',     // pill | rect
            color: 'gold'      // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'AftkQ_hNDOri194fP4zkSoy2khWwY5U34DYotF-ofLYbagCqqBTjXkIP6w-I6ZMggkKaG7Fp2W-YKax6',
            production: '<insert production client id>'
        },

        payment: function() {
            return paypal.request.post(CREATE_PAYMENT_URL).then(function(data) {
                return data.id;
            });
        },


        onAuthorize: function(data) {
            return paypal.request.post(EXECUTE_PAYMENT_URL, {
                paymentID: data.paymentID,
                payerID:   data.payerID
            }).then(function() {

                // The payment is complete!
                // You can now show a confirmation message to the customer
            });
        }

    }, '#paypal-button');


curl -v https://api.sandbox.paypal.com/v1/payments/payment \\
  -H 'Content-Type: application/json' \\
  -H 'Authorization: Bearer Access-Token' \\
  -d '{
  "intent": "sale",
  "experience_profile_id":"id",
  "redirect_urls":
  {
    "return_url": "https://example.com",
    "cancel_url": "https://example.com"
  },
  "payer":
  {
    "payment_method": "paypal"
  },
  "transactions": [
  {
    "amount":
    {
      "total": "4.00",
      "currency": "USD",
      "details":
      {
        "subtotal": "2.00",
        "shipping": "1.00",
        "tax": "2.00",
        "shipping_discount": "-1.00"
      }
    },
    "item_list":
    {
      "items": [
      {
        "quantity": "1",
        "name": "item 1",
        "price": "1",
        "currency": "USD",
        "description": "item 1 description",
        "tax": "1"
      },
      {
        "quantity": "1",
        "name": "item 2",
        "price": "1",
        "currency": "USD",
        "description": "item 2 description",
        "tax": "1"
      }]
    },
    "description": "The payment transaction description.",
    "invoice_number": "merchant invoice",
    "custom": "merchant custom data"
  }]
}'
</script>
               
   </table>
   <style>
     
     .paypal-button-container {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
   </style>
                   
                   
                   
                   
                   <form action="" method="post">
<input type="submit" name="click_button" value="Click..">
</form>
<?php
session_start();

if (isset($_POST['click_button'])) {
    $_SESSION['clicks'] += 1 ;
} else {
    $_SESSION['clicks'] = 0;
}

echo($_SESSION['clicks']);
           ?>
    </header>



          
                
                
                
                
   
    
     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 style="color:#33ff33"> <span class="copyright">Copyright &copy; Tours2Connect 2018</span> </h5>
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
    <!-- Header -->