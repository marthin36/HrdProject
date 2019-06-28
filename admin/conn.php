	<?php
	global $conn;
	$conn = mysqli_connect("localhost","root","","hrd_sql");
	    
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	?>