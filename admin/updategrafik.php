<?php


include 'conn.php';
// menyimpan data kedalam variabel
session_start();
$id  = $_GET['id_grafik'];
$posisi  = $_POST['posisi'];
$total  = $_POST['total'];


// query SQL untuk insert data
//$query="UPDATE pegawai SET jabatan='$jabatans',total='$totals' where ID ='$ID'";
//mysqli_query($conn, $query);
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id

	
	$hasil = mysqli_query($conn,"UPDATE tbl_grafik set posisi ='$posisi',total='$total' WHERE id_grafik = '$id'");
		 

		 // $query = "INSERT INTO tobabox1 SET nama_penerima ='$nama_penerimas',nama_pengirim = '$nama_pengirims' , no_penerima = '$no_penerimas', no_pengirim = '$no_pengirims', keterangan = '$keterangans' , kota = '$kotas' , alamat_pengirim = '$alamat_pengirims' , alamat_penerima = '$alamat_penerimas' , deskripsi = '$deskripsi'";
		 
		// var_dump($hasil);

		//jika query update 
		
		var_dump($posisi);
		if($hasil){
			echo"<script>alert('Edit grafik Berhasil');</script>";
			header("Refresh:0 url=indexadmin.php");
		}
		else{
			echo 'Gagal menyimpan data! '; //Pesan jika proses simpan gagal
			header("location:profil.php"); //membuat Link untuk kembali ke halaman edit
		}

	
    
?>