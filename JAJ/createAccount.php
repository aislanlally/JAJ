<!DOCTYPE html>
<HTML>
	<HEAD>
		<title>
		 Account Creation
		</title>
	</HEAD>
<BODY>
	
	<h1 align="center">Create New Account</h1>
<form align="center" action="createAccount_script.php" method="POST">

<p>First Name: <input type="text" name = "fname" size = "30"/></p>
<p>Last Name: <input type="text" name = "lname" size = "30"/></p>
<p>Enter Desired Username: <input type="text" name="username" size="30"/></p>
<p>Location: <input type="text" name="location" size="30"/></p>
<p>Enter Email: <input type="text" name="email" size="30"/></p>
<p>Enter Desired Password: <input type="password" name="password" size="30"/></p>
<p>Re-Enter Desired Password: <input type="password" name="repassword" size="30"/></p>

<input type="submit" name="submit" value="Submit"/>
</form>
</BODY>
</HTML>