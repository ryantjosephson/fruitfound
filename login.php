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
				echo "<div id='error'>{$_SESSION['message']}</div>";
				unset($_SESSION['messsage']);
			}
		?>
		<div class="editformcontainer">
		<h2 id="title">Login</h2>
		
		<form method="POST" action="loginhandler.php">
			
			<div class="formdiv"> <Label for="username">Username: <input type="text" id="username" name="username" pattern="\[^A-Za-z0-9_@\.]|@{2,}|\.{5,}"> </div>
			<div class="formdiv"> <Label for="password"> Password:&nbsp; <input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"> </div>
			<div> <input type="submit" value="Submit"></div>
		</form>
		</div>
		
		
	</body>
	</html>