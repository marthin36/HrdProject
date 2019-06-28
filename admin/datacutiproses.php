<?php
include ('conn.php');
session_start();
$id = $_SESSION['id_user'];
$namaku = $_SESSION['namalengkap'];
// $namas = $_POST['namas'];
$tujuans = $_POST['tujuans'];
$alasans = $_POST['alasans'];
 $mulaicutis = $_POST['mulaicutis'];
 $selesaicutis = $_POST['selesaicutis'];
// $selesaicutis = $_POST['selesaicutis']; 

   $input = mysqli_query($conn, "INSERT INTO cuti VALUES('','$namaku','$tujuans','$alasans','$mulaicutis','$selesaicutis','$id')");

	if($input){
	 		echo"<script>alert('Data Cuti Berhasil dikirim');</script>";
	 		header("location:datacuti.php");
	 	}
	 	else{
	 		echo 'Gagal '; //Pesan jika proses tambah	gagal
	 		header("location:data_cuti.php");//membuat Link untuk kembali ke halaman tambah
	 	}

    ?>