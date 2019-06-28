<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "hrd_sql");

	//$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
		
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "hrd_sql") or die("Select Database Problem !!");

	$id = $_GET['id'];
    $query = "DELETE FROM info WHERE id='$id'";
	if($conn->query($query)==true){
		echo"<script>alert('Hapus Schedule Berhasil');</script>";
	}
    header('Refresh:0 url=indexadmin.php');
?>