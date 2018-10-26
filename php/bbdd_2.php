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

		$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john-doe@hotmail.com')";

		if (mysqli_query($conn, $sql)) {
    		$last_id = mysqli_insert_id($conn);
    		echo "New record created successfully. Last inserted ID is: " . $last_id;
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	?>
</body>
</html>