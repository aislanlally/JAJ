<!DOCTYPE html>
<html>
  <head>
    <title>JAJ!</title>
	 <!--the title of our website-->
  </head>
<STYLE>
<!--import a background image-->

body {
    background-color: blue;
	background-image: url("JAJ logo.png");
	background-repeat: no-repeat;
	background-position: top right;
	background-size: 40%;
}

<!--editing the layout-->

h1 {
    color: maroon;
    text-align: center;
    font-size: 300%;
}

h2{
	font-size: 150%;}

h3{
	font-size: 150%;}

h4{
	font-size: 150%;}

</STYLE>
  <body>
  
  <?php
  	include('session.php');
	
	if(is_null($_SESSION['logged_in_user'])){ // if the user isn't logged in
  ?>
	<a href="loginpage.php">Login</a> <!-- show only the log in button -->
	<?php
	}
	?>
	
	<?php
 	
	if(($_SESSION['logged_in_user'])){ // if the user is logged in
  ?>
	<a href="logout.php">Login</a> <!-- show the log in button -->
	<?php
	}
	?>
	
  <!--create the header, change the position, color and text size in <style> -->
  	<a href="logout.php">Log Out</a>
	
	
    <div class="header"><h1>
<?php
      $welcome = "Welcome to the JAJ!";
      echo $welcome;
      ?>

    </h1></div>
    <h2>
    <p><strong>Website Creators:</strong>
    </p>
    </h2>

<strong>
      <?php
       echo "<p>Aislan Lally, Junxu Chen, Jie Wang";
      ?>
</strong>

<h3>
    <p><strong>JAJ's functionality includes the following features:</strong>
</h3>

<!-- we create an array and invoke it the array shows features of our web -->


      <?php
        $things = array("Browse and view some of the internet's best photography, snapchats, and memes!",
        "Send in your own images to the website admins!", "Evaluate and vote on your favorite images!",
        "Become a part of our vibrant community and upvote your favorite JAJ's to the top!");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        
        unset($thing);
      ?>
    </p>

<h4>
	<p><strong>You can login/register now from <a href="loginpage.php">here</a>!<strong></p>
	<!--link our loginpage to text by <a href= ""></a> -->
    	<p><strong>Submit your image to <font color="blue">aislanlally@yahoo.com</font>!<strong>
		 <!-- change the text number by <font> -->
	<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" /> <br />
	<input type="submit" name="uploadpic" value="Upload Image">
	</form>

</h4>

<?php
	if(isset($_POST['uploadpic'])){
			move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
			//$q=mysqli_query($database, "INSERT INTO pictures SET image = '".$_FILES['file']['name']."'");
			header("location:welcomepage.php");
			exit();
	}
	
?>

<h4> </h4>

<form>
<input type="button" value="Send eMail" onclick="window.location.href=''" />
<!-- create a button for email -->
</form>

</p>

<p><strong> Go to our homepage:<strong> </p>
<a href = "homepage.php"> <img src="home.png" alt=""/></a>
<!--import an image and link it to homepage-->


  </body> <!--the body part finished here -->
</html>