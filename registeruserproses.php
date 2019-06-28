<?php
include("conn.php");

$nama = $_POST['namalengkap'];
$tanggal = $_POST['tanggallahir'];
$jenis = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['nomortelepon'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$role = 2;


if($_FILES['gambar']['name']){
      move_uploaded_file($_FILES['gambar']['tmp_name'], 'image/profil/'.$nama.'.jpg');
      //proses menyimpan gambar ke dalam direktori
      $gambar = 'image/profil/'.$nama.'.jpg'; //membuat variabel $profile untuk d
}

  global $conn;
  require_once(dirname(__FILE__).'/conn.php');

  function execQ($strQ){
    global $conn;
    $res = mysqli_query($conn, $strQ);

    return $res;
  }

  $query = "INSERT INTO user VALUES(NULL,'$nama' , '$tanggal', '$jenis', '$alamat', '$notelp', '$email','$gambar','$username','$pass','$role')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    header("location:Registeruser.php");
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