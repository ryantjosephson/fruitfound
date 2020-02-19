<html>
	<header>
	<title>Hello World</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="footer.css">

	</header>
<body>
<div>
	<?php 
	include("header.php");
	?>
	<div class="maincontent">
		<div class="welcomecontentcontainer">
			<div class="welcomecontent">
			<h2> We're here to help you locate free local fruit and produce.<h2>
			<p> FruitFound helps you locate in-season fruit that would otherwise go to waste for a fraction of what it would cost in stores. All you have to do is pick it.</p>
			<p> You can locate nearby howeowners that have an excess quantity of fruit on their trees that's going to make a mess once it falls.  Of find supplemental feed for your farm animals.
			<p> If you're a homeowner, post your fruit on our site and save yourself the mess of cleaning up rotten fruit off of the ground. It's a win-win!</p>
			</div>
		</div>
		<div class="formcontainer">
			<div class="newuserform">
				<h2>Sign up for a free account</h2>
				<form method="POST" action="addlocation.php">
					<div class="newuserdiv"> First Name:</br> <input type="text" id="firstname" name="firstname"> </div>
					<div class="newuserdiv"> Last Name:</br><input type="text" id="lastname" name="lastname"> </div>
					<div class="newuserdiv"> Username:</br> <input type="text" id="username" name="username"> </div>
					<div class="newuserdiv"> Password:</br> <input type="text" id="password" name="password"> </div>
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