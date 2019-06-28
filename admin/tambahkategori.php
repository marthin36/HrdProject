<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="alert/css/sweetalert.css">
  </head>
  <body>
<?php



if (isset($_POST['tambahkategori'])) {
    include("conn.php");
    
    	
	// $kategori = mysqli_query($conn, $query2);
    // $kategori1 = mysqli_fetch_array($kategori);
    
	$tambah_kategori = $_POST['tambah_kategori'];
   
    

    $input = mysqli_query($conn,"INSERT INTO kategori values('','$tambah_kategori')");

if($input){
	     echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'kategori ditambahkan ',
        type: 'success',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('docmanage.php');
    } ,1000); 
    </script>";
	}else{
	 		echo "<script>alert('Data Gagal dimasukkan');</script>"; //Pesan jika proses tambah	gagal
	 		header("location:do.php");//membuat Link untuk kembali ke halaman tambah
	 }
}

?>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>
</body>
</html>