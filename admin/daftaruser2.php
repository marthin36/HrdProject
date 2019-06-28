<?php
	//koneksi ke database
require 'function.php';
//Pagination
//konfigurasi
$jumlahDataPerHalaman = 5;

$jumlahData = count (query("Select * from user"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset ($_GET["halaman"]))?$_GET["halaman"]:1;
 
$awalData = ($jumlahDataPerHalaman  * $halamanAktif) - $jumlahDataPerHalaman;


$user = query("SELECT * FROM user LIMIT	$awalData ,$jumlahDataPerHalaman");

 
//tomnol cari diclick
if( isset($_POST["cari"])){
	$user = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Daftar User || Sistem HRD</title>

  <!-- Favicons -->
  <link href="img/logo128.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">


</head>
<body>
<div class="form-panel">
<h1> Daftar User </h1>

<form action="" method="post">
	<input type="text" name="keyword"  size="40" autofocus placeholder="masukkan keyword pencarian.."  autocomplete="off">
	<button type="submit" name="cari">Cari!</button>  
</form>

<br><br>
<table border="1"  class="table table-striped table-bordered table-hover" cellpadding="10" cellspacing="0">

<tr>
	<th>No.</th>
	<th>Photo</th>
	<th>Nama</th>
	<th>Tanggal Lahir</th> 
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>No Hp</th>
	<th>Email</th>
	<th>Action</th>
</tr>
<?php   $i = 1; ?>
<?php
foreach( $user as $row ) : ?> 

<tr>
	<td><?= $i; ?></td>

	<td><img src="image/profil/<?= $row["pas_photo"]; ?>" width="50" height="50" ></td> 
	<td><?= $row["namalengkap"]; ?></td>
	<td><?= $row["tanggallahir"]; ?></td>
	<td><?= $row["jenis_kelamin"]; ?></td>
	<td><?= $row["alamat"]; ?></td>
    	<td><?= $row["nomortelepon"]; ?></td>
        	<td><?= $row["email"]; ?></td>
		<td>
			<a href=" detailuser.php?id_user=<?=$row['id_user']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></button></span></a>
			<a href=" hapususer.php?id_user=<?=$row['id_user']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button></span></a>
	

</tr>

<?php $i++; ?>
<?php endforeach; ?>
</table>
<center>

<!-- navigasi pagination -->
<?php if($halamanAktif > 1): ?>
<a href="?halaman=<?=$halamanAktif-1;?>" style="font-weight:bold;color:#3c8Dbc;font-size:28px;">&laquo;</a>
<?php endif; ?>

<?php for($i =1; $i <= $jumlahHalaman; $i++): ?>
<?php if($i == $halamanAktif): ?>
<a class="active" href="?halaman=<?=$i;?>" style="font-weight:bold;color:red;font-size:28px;"><?=$i;?></a>
<?php else: ?>
<a href="?halaman=<?=$i;?>" style="font-weight:bold;blue:red;font-size:28px;"><?=$i;?></a>

<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman): ?>
<a href="?halaman=<?=$halamanAktif + 1;?>"style="font-weight:bold;color:#3c8Dbc;font-size:28px;">&raquo;</a>
<?php endif; ?> 
</center>
<!-- end navigation -->
<br>


</div>
</body>
</html> 