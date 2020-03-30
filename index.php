<?php
	session_start();
	
?>
<html>
	<header>
	<title>FruitFound</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
	</header>
<body>
<div class="pagecontainer">
	<?php 
	include("header.php");
	?>
	<div class="maincontent">
		<div class="welcomecontentcontainer">
			<div class="welcomecontent">
			<h2> We're here to help you locate free local fruit and produce.</h2>
			<p> FruitFound helps you locate in-season fruit that would otherwise go to waste for a fraction of what it would cost in stores. All you have to do is pick it.</p>
			<p> You can locate nearby howeowners that have an excess quantity of fruit on their trees that's going to make a mess once it falls.  Of find supplemental feed for your farm animals.
			<p> If you're a homeowner, post your fruit on our site and save yourself the mess of cleaning up rotten fruit off of the ground. It's a win-win!</p>
			<h2> <a href="searchpage.php">Start Searching for fruit in your area</a></h2>
			</div>
		</div>
		<div class="formcontainer">
			<div class="newuserform">
				<h2>Sign up for a free account</h2>
				<?php 
			if (isset($_SESSION['message'])) {
				echo "<div id='error'>{$_SESSION['message']}</div>";
				unset($_SESSION['messsage']);
			}
		?>
		
				<form method="POST" action="signuphandler.php">
					<div class="newuserdiv"> First Name:</br> <input type="text" id="firstname" name="firstname" pattern="\^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$"> </div>
					<div class="newuserdiv"> Last Name:</br><input type="text" id="lastname" name="lastname"pattern="\^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$"> </div>
					<div class="newuserdiv"> Username:</br> <input type="text" id="username" name="username" pattern="\[^A-Za-z0-9_@\.]|@{2,}|\.{5,}"> </div>
					<div class="newuserdiv"> Password:</br> <input type="password" id="password" name="password" pattern="\^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$"> </div>
					<div class="submitbutton"><input type="submit"  value="Submit"></div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
	include("footer.php");
	?>
</div>
</body>
</html>