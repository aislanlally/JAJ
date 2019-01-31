<?php 
	session_start();
	// connect to database
	$db = mysqli_connect('localhost', 'root', 'password','user_accounts');
	if(!$db){
		echo "Not Connected to server";
	}
	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$age = $_POST['age']; 
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		if ($password == $repassword) {
			// create user
			$sql = "INSERT INTO profiles(id, fname, lname, username, age, location, email, password, image, karma) VALUES(NULL, '$fname','$lname','$username', '$age', '$location', '$email', '$repassword', '',0)";
			$addprofile = mysqli_query($db, $sql2);
			if(mysqli_query($db, $sql)){
				echo "New record created successfully";
			}else{
				echo "New record not created";
			}
			//$_SESSION['message'] = "You are now logged in";
			//$_SESSION['username'] = $username;
			header("location: homepage.php"); //redirect to home page
		}else{
			print "Passwords do not match. Please return to previous page and try again.";
		}
	}
?>