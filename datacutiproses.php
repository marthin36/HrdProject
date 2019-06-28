<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="alert/css/sweetalert.css">
  </head>
  <body>
<?php
if (isset($_POST['kirim'])) {
	include("conn.php");

	session_start();
$id_user = $_SESSION['id_user'];
$namaku = $_SESSION['namalengkap'];
// $namas = $_POST['namas'];
$status ="menunggu";
$tujuans = $_POST['tujuans'];
$alasans = $_POST['alasans'];
 $mulaicutis = $_POST['mulaicutis'];
 $selesaicutis = $_POST['selesaicutis'];
// $selesaicutis = $_POST['selesaicutis'];





   $input = mysqli_query($conn, "INSERT INTO cuti values ('','$namaku','$tujuans','$alasans','$mulaicutis','$selesaicutis','$status','$id_user')");
	// var_dump($status);
	// echo $id_user;

// Cek input kosong
	

	if($input ){
	 		echo"<script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'Request Berhasil',
        type: 'success',
        timer: 3000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('tablecuti.php');
    } ,1000); 
    </script>";
	 		// header("location:tablecuti.php");
	 	}
	 	else{
	 		echo 'Gagal '; //Pesan jika proses tambah	gagal
	 		header("location:data_cuti.php");//membuat Link untuk kembali ke halaman tambah
	 	}

	}
    ?>


	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>

</body>
</html>

