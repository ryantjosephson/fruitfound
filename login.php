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
			<h3 id="title">Login</h3>
			if (isset($_SESSION['message'])) {
				echo "<div id='error'>{$_SESSION['message']}</div>";
				unset($_SESSION['messsage']);
			}
		?>
		<form method="POST" action="loginhandler.php">
			
			<div class="formdiv"> <Label for="username">Username: <input type="text" id="username" name="username"> </div>
			<div class="formdiv"> <Label for="password"> Password:&nbsp; <input type="text" id="password" name="password"> </div>
			<div> <input type="submit" value="Submit"></div>
		</form>
		
		
		
	</body>
	</html>