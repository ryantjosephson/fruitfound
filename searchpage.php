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

	</header>
	<body>
	<?php 
	include("header.php");
	?>
	<div>
	<p>Enter your zipcode and search for fruit.  Results will post below.</p>
	<form method="POST" action="searchpage.php">	
		<div class="formdiv"> <Label for="zip">ZipCode: <input type="zipcode" id="zip" name="zip"> </div>
		<div> <input type="submit" value="Submit"></div>
	</form>
	</div>
	<table>
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
	/* 		if(isset($_POST['zip'])){
				$lines = $dao->getLocations();
				if (is_null($lines)) {
				echo "There was an error.";
			} else {
				foreach ($lines as $line) {
				echo "<tr><td>".$line['LocationName']."</td><td>{$line['Street']}</td><td>{$line['City']}</td><td>{$line['State']}</td><td>{$line['Zip']}</td><td>{$line['Phone']}</td></tr>";
				}
			} */
		?>
		</tbody>
	</table>
	<?php
	include("footer.php");
	?>
	</body>
</html>