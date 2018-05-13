<?php
   include('config.php');
   
   include('edit_profile_handler.php');
   
   include("User.php");
   ?>
   
   <?php
   if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM user WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}

?>
   
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
<div class="profile_details column">
	
<div class="container">
<div class="col-md-6 form-line">
   <form method="post"  enctype="multipart/form-data">
      
      	<div class="form-group">
			  				<label style="color:#33ff33" for="email">Email</label>
					    		<input class="form-control" name="email" value="<?=$email;?>" placeholder="<?php echo $user ['email']; ?>">
				  		</div>
     
      
                  <label for="bio">Bio</label>
				  			<div class="form-group">
					    	<textarea  rows="6" cols="40" name="bio" > <?php echo $user ['bio'];?> </textarea>
				  		</div>
      </div>
      
      
         <input type="submit" value="Save"  class="btn btn-primary" name="submit">
   </form>
   </div>
</div>