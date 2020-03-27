	<?php 
		session_start();
	?>
	
	
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="header.css">
			<link rel="stylesheet" type="text/css" href="main.css">
			<link rel="stylesheet" type="text/css" href="footer.css">
			<link rel="stylesheet" type="text/css" href="login.css">
			<link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
			
		</head>
	<body>
		<?php 
			include("header.php");
		?>
		<form method="POST" action="accounthandler.php">
			<h3 id="title">Login</h3>
			<div class="logindiv"> Username: <input type="text" id="username" name="username"> </div>
			<div class="logindiv"> Password:&nbsp; <input type="text" id="password" name="password"> </div>
			<div class="submitbutton"><input type="submit" value="Submit"></div>
		</form>
		
		
		
	</body>
	</html>