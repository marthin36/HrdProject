<?php
include("conn.php");
session_start();


$keterangan = $_POST['keterangan'];
$tanggal = $_POST['tanggal'];



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

  $query = "INSERT INTO info VALUES(NULL,'$keterangan' , '$tanggal')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    header("location:indexadmin.php");
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