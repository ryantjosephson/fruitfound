<?php
session_start();

  if (!isset($_SESSION['auth']) || !$_SESSION['auth'])  {
    header("Location: http://cs401/login.php");
    exit;
  }
?>

<html>
	<header>
	<title>Hello World</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="footer.css">

	</header>
	<body>
	<div class="pagecontainer">
	<?php 
	include("header.php");
	?>
	<div>
	<p>Sign in Successful</p>
	<p> Manage your account below</p> 
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
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
		    $lines = $dao->getLocations();
			if (is_null($lines)) {
			echo "There was an error.";
			} else {
				foreach ($lines as $line) {
				echo "<tr><td>{$line['LocationName']}/></td><td> {$line['Street']}</td><td>{$line['city']}</td><td>{$line['State']}</td><td>{$line['Zip']}</td><td>{$line['Phone']}</td><td class='edit'><a href='edit_location.php?id={$line['LocationID']}'>X</a></td></tr>";
				}
			}
		?>
		</tbody>
	</table>
<?php	
	include("footer.php");
	?>
	</body>
</html>