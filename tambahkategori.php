<?php



if (isset($_POST['tambahkategori'])) {
    include("conn.php");
    
    	
	// $kategori = mysqli_query($conn, $query2);
    // $kategori1 = mysqli_fetch_array($kategori);
    
	$tambah_kategori = $_POST['tambah_kategori'];
   
    

    $input = mysqli_query($conn,"INSERT INTO kategori values('','$tambah_kategori')");

if($input){
		echo "<br>kueri bekerja";
		echo"<script>alert('Data Berhasil dimasukkkan');</script>";
	 		header("location:docmanage.php");
	}else{
	 		echo "<script>alert('Data Gagal dimasukkan');</script>"; //Pesan jika proses tambah	gagal
	 		header("location:do.php");//membuat Link untuk kembali ke halaman tambah
	 }
}

?>