<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "myDB";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		// sql to delete a record
		$sql = "DELETE FROM MyGuests WHERE id=1";

		if (mysqli_query($conn, $sql)) {
    		echo "Record deleted successfully";
		} else {
    		echo "Error deleting record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	?>
</body>
</html>