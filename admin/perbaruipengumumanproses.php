<?php 
if(isset($_POST['perbaruipengumuman'])){
	include('conn.php');
	$idP = $_GET['id_pengumuman'];
	$judul = $_POST['judul']; 
	$deskripsi = $_POST['deskripsi'];
 	$publish =  date("Y-m-d h:i");

	// echo $tujuan;
	// echo $harga;

	$perbaruiPengumuman = mysqli_query($conn, "UPDATE pengumuman set judul ='$judul' , deskripsi = '$deskripsi' ,publish = '$publish' WHERE id_pengumuman = '$idP'");


	if($perbaruiPengumuman){
		 echo"<script>alert('Perbarui tujuan Berhasil');</script>";
		header("location:pengumuman2.php");
	}else{
		echo "<script>alert('Perbarui tujuan Gagal');</script>";
		header("location:data_tujuan.php");
	}
}


 ?>