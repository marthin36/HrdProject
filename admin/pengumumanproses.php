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

// $namas = $_POST['namas'];
// $status ="menunggu";

 $juduls = $_POST['juduls'];
 $deskripsis = $_POST['deskripsis'];
   $publish =  date("Y-m-d h:i");
   $ids = $_SESSION['id_user'];
// $selesaicutis = $_POST['selesaicutis'];

   $input = mysqli_query($conn, "INSERT INTO pengumuman values ('','$juduls','$deskripsis','$publish','$ids')");
	// var_dump($status);
	// echo $id_user;

	if($input){
	 		echo"<script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'Pengumuman telah ditambahkan',
        type: 'success',
        timer: 3000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('pengumuman2.php');
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

