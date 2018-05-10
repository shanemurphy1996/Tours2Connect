<?php
//fetch.php
if(isset($_POST["query"]))
{
 $connect = mysqli_connect("localhost", "root", "", "tours2connect");
 $request = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
          SELECT * FROM tour
          WHERE first_name LIKE '%".$request."%' 
          OR last_name LIKE '%".$request."%' 
          OR category LIKE '%".$request."%'
          OR tour_name LIKE '%".$request."%'
          OR region LIKE '%".$request."%'
          OR price LIKE '%".$request."%'
 ";
 
 $result = mysqli_query($connect, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table table-bordered table-striped">
   <tr>
    <th>first_name</th>
    <th>last_name</th>
    <th>category</th>
    <th>tour_name</th>
    <th>region</th>
    <th>price</th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0){
     
  while($row = mysqli_fetch_array($result)){
      
   $data[] = $row["first_name"];
   $data[] = $row["last_name"];
   $data[] = $row["category"];
   $data[] = $row["tour_name"];
   $data[] = $row["region"];
   $data[] = $row["price"];
   $html .= '
   <tr>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["category"].'</td>
     <td>'.$row["tour_name"].'</td>
    <td>'.$row["region"].'</td>
    <td>'.$row["price"].'</td>
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>