<?php
 	session_start();
	require_once 'dao.php';
	$dao = new Dao(); 
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
	<?php 
	include("header.php");
	?>
	<div class="editformcontainer">
	<p>Enter your zipcode and search for fruit.  Results will post below.</p>
	<form method="GET" action="searchpage.php">	
		<div class="formdiv"> <Label for="zip">ZipCode: <input type="zipcode" id="zip" name="zip" pattern="(\d{5}([\-]\d{4})?)"> </div>
		<div> <input type="submit" value="Submit"></div>
	</form>
	</div>
	<table class="greenTable">
		<thead>
			<tr>
				<th>Location</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Phone</th>
			</tr>
		</thead>
		<tbody>
		<?php
	 		if(isset($_GET['zip'])){
				$lines = $dao->search($_GET['zip']);
				if (is_null($lines)) {
					$_SESSION['message'] = "There are no users with fruit in your area, sign up and be the first.";
				} else {
					foreach ($lines as $line) {
					echo "<tr><td>".$line['LocationName']."</td><td>{$line['Street']}</td><td>{$line['City']}</td><td>{$line['State']}</td><td>{$line['Zip']}</td><td>{$line['Phone']}</td></tr>";
				}
			} 
		}
			if (isset($_SESSION['message'])) {
				echo "<div id='error'>{$_SESSION['message']}</div>";
				unset($_SESSION['messsage']);
			}
		?>
		</tbody>
	</table>
	<?php
	include("footer.php");
	?>
	</body>
</html>