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
			
			if (isset($_SESSION['message'])) {
				print_r "<pre id='error'>{$_SESSION['message']}</pre>";
				unset($_SESSION['messsage']);
			}
		?>
		<h2 id="title">Login</h2>
		<form method="POST" action="loginhandler.php">
			
			<div class="formdiv"> <Label for="username">Username: <input type="text" id="username" name="username"> </div>
			<div class="formdiv"> <Label for="password"> Password:&nbsp; <input type="password" id="password" name="password"> </div>
			<div> <input type="submit" value="Submit"></div>
		</form>
		
		
		
	</body>
	</html>