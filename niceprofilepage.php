<?php


require 'config.php';
if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM user WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	header("Location: register.php");
}
?>
 <div class="profile_details column">
			
			
			<div class="container">
				<form action="editprofile.php" method="POST">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  					<a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> </a>
			  					<br>
			  				<label for="up_experience">Experience</label>
					    	<input readonly="readonly" class="form-control" name="user name" value="<?=$username;?>" placeholder="<?php echo $user ['username']; ?>">
				  		</div>
				  	
				  		<div class="form-group">
			  				<label for="up_influences">Instruments</label>
					    	<input readonly="readonly" class="form-control" name="instruments" value="<?=$first_name?>" placeholder="<?php echo $user ['first_name']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
			  				<label for="up_influences">Influences</label>
					    	<input readonly="readonly" class="form-control" name="Influences" value="<?=$influences;?>" placeholder="<?php echo $user ['Influences']; ?>">
				  		</div>
				  		
				  		
					  	<div class="form-group">
			  				<label for="up_gigsplayed">Gigs Played</label>
					    		<input readonly="readonly" class="form-control" name="gigsplayed" value="<?=$gigs_played;?>" placeholder="<?php echo $user ['gigs_played']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
			  				<label for="up_location">Location</label>
					    		<input readonly="readonly" class="form-control" name="location" value="<?=$location;?>" placeholder="<?php echo $user ['location']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
			  				<label for="up_genre">Genre</label>
					    	<input readonly="readonly" class="form-control" name="genre" value="<?=$Genre;?>" placeholder="<?php echo $user ['Genre']; ?>">
				  		</div>
				  		
				  			<div class="form-group">
			  				<label for="up_genre2">Genre2</label>
					    	<input readonly="readonly" class="form-control" name="genre2" value="<?=$Genre2;?>" placeholder="<?php echo $user ['Genre2']; ?>">
				  		</div>
			

				  			<div class="form-group">
			  				<label for="up_genre3">Genre3</label>
					    	<input readonly="readonly" class="form-control" name="genre3" value="<?=$Genre3;?>" placeholder="<?php echo $user ['Genre3']; ?>">
				  		</div>
				  		
				  		<div class="form-group">
			  				<label for="up_genre4">Genre4</label>
					    	<input readonly="readonly" class="form-control" name="genre4" value="<?=$Genre4;?>" placeholder="<?php echo $user ['Genre4']; ?>">
				  		</div>
				  		
				  			<label for="up_bio">Bio</label>
				  			<div class="form-group">
					    	<textarea readonly="readonly" rows="4" cols="40"> <?php echo $user ['bio'];?> </textarea>
				  		</div>
				  		
				  	 <input type="Submit" name="formSubmit" value="Edit Profile" class="btn btn-danger" onclick="clicked();"/>
				  
					  
			  		</div>
			  	
				</form>
			</div>
</div>