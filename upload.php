<?php
require_once 'conn.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {
		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;
		$kategori = $_POST['kategori'];
		
		$conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path', '$kategori')") or die(mysqli_error());
		
		move_uploaded_file($file_temp, $path);
		header("location:uploaddoc.php");
		
	}else{
		echo "<script>alert('Required Field!')</script>";
		echo "<script>window.location='uploaddoc.php'</script>";
	}
}
?>