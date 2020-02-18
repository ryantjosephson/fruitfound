<html>
	<header>
	<title>Hello World</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="footer.css">

	</header>
<body>
<div class="w3-container w3-red">
	<?php 
	include("header.php");
	?>
	<div class="maincontent">
		<div class="welcomecontentcontainer">
			<div class="welcomecontent">
			<p> Some Content</p>
			</div>
		</div>
		<div class="formcontainer">
			<div class="newuserform">
				<form method="POST" action="addlocation.php">
					<div class="newuserdiv"> First Name: <input type="text" id="firstname" name="firstname"> </div>
					<div class="newuserdiv"> Last Name: <input type="text" id="lastname" name="lastname"> </div>
					<div class="newuserdiv"> Username: <input type="text" id="username" name="username"> </div>
					<div class="newuserdiv"> Password:&nbsp; <input type="text" id="password" name="password"> </div>
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