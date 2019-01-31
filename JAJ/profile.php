<?PHP
	include('session.php');
//	print "welcome $logged_in_user";
	
	$database = mysqli_connect("localhost","root","password","user_accounts"); // connect to database

	$account = mysqli_query($database,"SELECT * FROM profiles WHERE username = '$logged_in_user'"); // find the account of the user

	$accountrow = mysqli_fetch_array($account,MYSQLI_ASSOC); // find the row of the account
	
	$location = $accountrow['location']; 
	$age = $accountrow['age']; 
	$fname = $accountrow['fname'];
	$lname = $accountrow['lname'];
	$username = $logged_in_user;
	$email = $accountrow['email'];
//	$karma = $accountrow['karma'];

	if(isset($_POST['uploadpic'])){
		move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
		$q=mysqli_query($database, "UPDATE profiles SET image = '".$_FILES['file']['name']."' WHERE username = '$logged_in_user'");
	}	


?>

<HTML>
	<HEAD>
		<title>
		Welcome!
		</title>
	</HEAD>
<BODY>

	<?php
	if($accountrow['image'] == "")
		echo "<img width='200' height='200' src= 'default.png' alt='Default Profile Pic'>";
	else
		echo "<img width='200' height='200' src= ".$accountrow['image']." alt='Profile Pic'>";
	?>

	"<img width='200' height='200' src= 'JAJ logo.png' >

	<h1 align="left"> <?php print "$fname $lname" ?></h1>
	<h1 align="left"> Username: <?php print "$username" ?></h1>
	<h1 align="left"> Contact info: <?php print "$email" ?></h1>
	<h1 align="left"> Location: <?php print "$location" ?></h1>
	<h1 align="left"> Age: <?php if($age!=0) print "$age" ?></h1>
	<h1 align="left"> Karma: <?php print "$location" ?></h1>
	
	
	<h2><a href="logout.php">Log Out</a></h2>
	<h3><a href="deleteaccount.php">Deactivate Account</a></h3>
	<h4><a href="editprofile.php">Edit Profile</a></h3>	


</BODY>
</HTML>
