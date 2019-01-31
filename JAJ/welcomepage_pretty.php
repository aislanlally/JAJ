<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>JAJ!</title>
  </head>
<STYLE>
body {
        background-color: lightblue;
	background-image: url("JAJ logo.png");
	background-repeat: no-repeat;
	background-position: top right;
	background-size: 40%;
}

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
    	<p><strong>Submit your image to <font color="blue">aislanlally@yahoo.com</font>!<strong>

</h4>

<form>
<input type="button" value="Send eMail" onclick="window.location.href=''" />
</form>

</p>

<p><strong> Go to our homepage:<strong> </p>
<a href = "homepage.php"> <img src="home.png" alt=""/></a>

  </body>
</html>