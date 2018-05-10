<?php
require("googleapiconfig.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server
$connection=mysqli_connect ('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysqli_error());
}

// Set the active MySQL database
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM tour WHERE 1";
$result = mysqli_query($connection, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<tour>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['id'] . '" ';
  echo 'first_name="' . parseToXML($row['first_name']) . '" ';
  echo 'last_name="' . parseToXML($row['last_name']) . '" ';
  echo 'category="' . parseToXML($row['category']) . '" ';
  echo 'tour_name="' . parseToXML($row['tour_name']) . '" ';
  echo 'region="' . parseToXML($row['region']) . '" ';
  echo 'price="' . parseToXML($row['price']) . '" ';
  echo 'meetingpoint="' . parseToXML($row['meetingpoint']) . '" ';
  echo 'date="' . parseToXML($row['date']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</tour>';

?>