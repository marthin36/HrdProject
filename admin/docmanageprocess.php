<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="alert/css/sweetalert.css">
  </head>
  <body>
<?php

session_start();

if (isset($_POST['save'])) {
    include("conn.php");
	if($_FILES['upload']['name'] != "") {
    
    	
	// $kategori = mysqli_query($conn, $query2);
    // $kategori1 = mysqli_fetch_array($kategori);
    
	// $kategori = $_POST['kategori'];
	$nama = $_POST['nama'];
	  $luas = $_POST['luas'];
		$lokasi = $_POST['lokasi'];
		  $awal = $_POST['awal'];
		    $akhir = $_POST['akhir'];
      
        	$file = $_FILES['upload'];
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;

    $input = mysqli_query($conn,"INSERT INTO data_kontrakan values('','$nama','$luas','$lokasi','$awal','$akhir', '$name[0]','$path')");
      
	
		move_uploaded_file($file_temp, $path);
if($input){
	     echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'Data Sewa Kontrakan Berhasil ditambahkan',
        type: 'success',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('daftarkontrakan.php');
    } ,1000); 
    </script>";
	}else{
	 		echo "<script>alert('Data Gagal dimasukkan');</script>"; //Pesan jika proses tambah	gagal
	 		header("location:do.php");//membuat Link untuk kembali ke halaman tambah
	 }
}
}

?>