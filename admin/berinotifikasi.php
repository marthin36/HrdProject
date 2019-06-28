
<?php
	// session_start();
	// echo $_SESSION['nomortelepon'];

	//mulai proses edit data
	//cek dahulu, jika tombol simpan di klik
	if(isset($_POST['beriPersetujuan'])){
		//inlcude atau memasukkan file koneksi ke database
		include('conn.php');

		//jika tombol tambah benar di klik maka lanjut prosesnya
		$id_cuti = $_GET['id_cuti'];
		
		$beriPersetujuan = $_POST['ajukan'];
		// $keterangan_supir = $_POST['konfirmasiSupir'];
		// $noTelpSupir = $_SESSION['nomortelepon'];	
		// $namaSupir = $_SESSION['namalengkap'];
		// $pasPhoto = $_SESSION['pas_photo'];
		// $idSupir = $_SESSION['id_user'];


		// echo $id_lamaran."<br>";
		// echo $beriPersetujuan;
		// echo $notifikasiPersetujuan."<br>";
		$ubah = mysqli_query($conn, "UPDATE cuti SET status ='$beriPersetujuan' WHERE id_cuti='$id_cuti'");

		// echo $idPesan."<br>";
		// echo $pasPhoto."<br>";

		if($ubah){
            echo "<script>alert('Persetujuan telah dikirim');</script>";
            header("Refresh:0 url=tablecuti.php");
		}else{
			echo "<script>alert('Persetujuan tidak dikirim');</script>";
		}

	}
?>
