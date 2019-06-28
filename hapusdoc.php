<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="alert/css/sweetalert.css">
  </head>
  <body>
<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "hrd_sql");

	//$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
		
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "hrd_sql") or die("Select Database Problem !!");

	$id = $_GET['file_id'];
    $query = "DELETE FROM file WHERE file_id='$id'";
	if($conn->query($query)==true){
	echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'File Berhasil Dihapus',
        type: 'info',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('uploaddocuser.php');
    } ,1000); 
    </script>";
	}
  
?>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>
</body>
</html>
