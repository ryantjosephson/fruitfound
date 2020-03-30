<?php
	session_start();
	?>
<header class="header">
	<div class="header-left">

		<a href="index.php"><img class="logoimg" src="appletree.png"></a>
		<h1 class="titletext">FruitFound!</h1>
		
	</div>
	
	<div class="header-middle">
	</div>
	<div class="header-right">
	<div>
		<?php
		if (!isset($_SESSION['auth']) || !$_SESSION['auth']){
		echo "<a class='loginpage' href='login.php'>Login</a>";
		}else{
		echo "<a class='loginpage' href='logout.php'>Logout</a>";
		}
			?>
	</div>
		<div>
		<a class='loginpage' href='searchpage.php'>Search</a>
		</div>
		<div>
				<?php
		if (isset($_SESSION['auth']) || $_SESSION['auth']){
		echo "<a class='loginpage' href='Account.php'>Manage Account</a>";
		}
			?>
			</div>
	</div>
</header>
