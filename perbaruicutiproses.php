<?php 
if(isset($_POST['perbaruipengumuman'])){
	include('conn.php');
    $idP = $_GET['id_cuti'];
    $nama = $_POST['nama'];
  
    $tujuan = $_POST['tujuan']; 
    	$alasan = $_POST['alasan']; 
    $mulai = $_POST['mulai'];
        $selesai = $_POST['selesai']; 
        $status = $_POST['status'];


	// echo $tujuan;
	// echo $harga;

	$perbaruiPengumuman = mysqli_query($conn, "UPDATE cuti set nama ='$nama' , tujuan = '$tujuan', alasan = '$alasan', mulaicuti = '$mulai', selesaicuti = '$selesai', status = '$status' WHERE id_cuti= '$idP'");
var_dump($perbaruiPengumuman);

	if($perbaruiPengumuman){
		 echo"<script>alert('Perbarui tujuan Berhasil');</script>";
		header("location:tablecuti.php");
	}else{
		echo "<script>alert('Perbarui tujuan Gagal');</script>";
		header("location:data_tujuan.php");
	}
}


 ?>