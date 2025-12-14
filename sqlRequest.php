<?php
	$q = $_GET['q'];
	
	$servername = getenv('DB_HOST') ?: 'localhost';
	$username = getenv('DB_USER') ?: 'your_username';
	$password = getenv('DB_PASS') ?: 'your_password';
	$dbname = getenv('DB_NAME') ?: 'your_database';
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql="SELECT * FROM stats";
	$result = $conn->query($q);

	while($row = mysqli_fetch_assoc($result))
		$test[] = $row; 
	echo json_encode($test);
	
	$conn->close();
?>