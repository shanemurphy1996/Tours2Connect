<?php
class User {
	private $user;
	private $con;

	public function __construct($con, $user){
		$this->con = $con;
		$user_details_query = mysqli_query($con, "SELECT * FROM user WHERE username='$user'");
		$this->user = mysqli_fetch_array($user_details_query);
	}

	public function getUsername() {
		return $this->user['username'];
	}



	public function getFirstName() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT first_name, last_name FROM user WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['first_name'] . " " . $row['last_name'];
	}

public function getLastName() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT first_name, last_name FROM user WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return  $row['last_name'];
	}
	
	
	
		public function getEmail() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT email FROM user WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['email'];
	}
	
		

		 

	
	





}

?>