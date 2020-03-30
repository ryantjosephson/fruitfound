<?php
session_start();

  if (!isset($_SESSION['auth']) || !$_SESSION['auth'])  {
    header("Location: http://cs401/login.php");
    exit;
  }
  
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
	<div class="pagecontainer">
	<?php 
	include("header.php");
	
	$location = $dao->getLocation($_GET['id']);
	?>
	<div>
	<p>Edit your Location</p>
	</div>
	<div class="editformcontainer">
 		 <form method="POST" action="editlocationhandler.php">
			<div class="newuserdiv"> <input type="hidden" id="locationid" name="locationid" value="<?php echo "$_GET['id']";?>">
			<div class="newuserdiv"> Location Name:</br> <input type="text" id="locationname" name="locationname" value="<?php echo "$location['LocationName']";?>"> </div>
			<div class="newuserdiv"> Street:</br><input type="text" id="street" name="street" value="<?php echo "$location['Street']";?>"> </div>
			<div class="newuserdiv"> City:</br> <input type="text" id="city" name="city" value="<?php echo "$location['City']";?>"> </div>
			<div class="newuserdiv"> State:</br> <input type="text" id="state" name="state" value="<?php echo "$location['State']";?>"> </div>
			<div class="newuserdiv"> Zip:</br> <input type="text" id="zip" name="zip" value="<?php echo "$location['Zip']";?>"> </div>
			<div class="newuserdiv"> Phone:</br> <input type="text" id="phone" name="phone" value="<?php echo "$location['Phone']";?>"> </div>
			<div class="submitbutton"><input type="submit"  value="Submit"></div>
		</form>  
	</div>
	<div>
	 <table class="greenTable">
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
				echo "<tr><td>".$line['LocationName']."</td></tr><td>{$line['Street']}</td><td>{$line['city']}</td><td>{$line['State']}</td><td>{$line['Zip']}</td><td>{$line['Phone']}</td><td class='edit'><a href='edit_location.php?id={$line['LocationID']}'>X</a></td></tr>";
				}
			}
		?>
		</tbody>
	</table>
	</div>
<?php	
	include("footer.php");
	?>
	</body>
</html>