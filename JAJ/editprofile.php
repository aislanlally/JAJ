<?php

	include('session.php');
	$database = mysqli_connect("localhost","root","password","user_accounts"); // connect to database

	$account = mysqli_query($database,"SELECT * FROM profiles WHERE username = '$logged_in_user'"); // find the account of the user

	$accountrow = mysqli_fetch_array($account,MYSQLI_ASSOC); // find the row of the account
	
	$location = $accountrow['location']; 
	$age = $accountrow['age']; 
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
	<form action="editprofile_script.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" /> <br />
	<input type="submit" name="uploadpic" value="Upload Image">
	</form>

	<h1 align="center">Update Profile</h1>
<form align="left" action="editprofile_script.php" method="POST">

<p>Location: <input type="text" name="location" size="30" value= "<?php print "$location" ?>" /></p>
<p>Age: <input type="text" name="age" size="30" value= "<?php if($age!=0) print "$age" ?>"/></p>

<input type="submit" name="submit" value="Submit"/>
</form>
</BODY>
</HTML>
