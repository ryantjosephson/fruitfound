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
	?>
	<div>
	<p>Add your Location</p>
	</div>
 		 <form method="POST" action="addlocationhandler.php">
			<div class="newuserdiv"> Location Name:</br> <input type="text" id="locationname" name="locationname"></div>
			<div class="newuserdiv"> Street:</br><input type="text" id="street" name="street" ></div>
			<div class="newuserdiv"> City:</br> <input type="text" id="city" name="city" ></div>
			<div class="newuserdiv"> State:</br> <input type="text" id="state" name="state" ></div>
			<div class="newuserdiv"> Zip:</br> <input type="text" id="zip" name="zip" pattern="(\d{5}([\-]\d{4})?)"></div>
			<div class="newuserdiv"> Phone:</br> <input type="text" id="phone" name="phone" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$"></div>
			<div class="submitbutton"><input type="submit"  value="Submit"></div>
		</form>  
	
	<div>
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