<?php
include("conn.php");
session_start();

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$role = 2;
$nip = $_POST['nip'];
$nidn = $_POST['nidn'];
$agama = $_POST['agama'];
$tempat = $_POST['tempatlahir'];
$ktp = $_POST['noktp'];
$nosk = $_POST['nosk'];
$kerja = $_POST['kerja'];
$masuk = $_POST['masuk'];


if($_FILES['gambar']['name']){
      move_uploaded_file($_FILES['gambar']['tmp_name'], 'image/profil/'.$nama.'.jpg');
      //proses menyimpan gambar ke dalam direktori
      $gambar = ''.$nama.'.jpg'; //membuat variabel $profile untuk d
}

  global $conn;
  require_once(dirname(__FILE__).'/conn.php');

  function execQ($strQ){
    global $conn;
    $res = mysqli_query($conn, $strQ);

    return $res;
  }

  $query = "INSERT INTO user VALUES(NULL,'$nama' , '$tanggal', '$jenis', '$alamat', '$notelp', '$email', '$jabatan','$nip','$nidn','$agama','$tempat','$ktp','$nosk','$gambar','$masuk','$kerja','$username','$pass','$role')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'User berhasil ditambahkan',
        type: 'success',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('Registeruser.php');
    } ,1000); 
    </script>";
  }else{
    echo "gagal";
  }
//   if(execQ($query)){
//     $SIGN['is_sign_in'] = TRUE;
//     header("location:Registeruser.php");
//   }else{
//     echo "gagal";
//   }

?>