<?php
$sql = "SELECT * FROM products";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $row = mysqli_fetch_assoc($resultset) ) {
?>
<div class="col-sm-4 col-lg-4 col-md-4">
<div class="thumbnail">
  
  
  
<img src="images/<?php echo $row['p_image']; ?>"/>



<div class="caption">
<h4 class="pull-right">Price: <?php echo $row['price']; ?></h4>


<h4>Name: <?php echo $row['p_name']; ?></h4>
</div>


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<!-- Paypal business test account email id so that you can collect the payments. -->
<input type="hidden" name="business" value="<?php echo $paypal_email; ?>">


<!-- Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Details about the item that buyers will purchase. -->
<input type="hidden" name="tour_name" value="<?php echo $row['tour_name']; ?>">
<input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
<input type="hidden" name="currency_code" value="EUR">


<!-- URLs -->
<input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>

<!-- payment button. -->
<input type="image" name="submit" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
</div>
</div>
<?php } ?>