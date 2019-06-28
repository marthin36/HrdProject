<?php
	//koneksi ke database
require 'function3.php';
//Pagination
//konfigurasi
$jumlahDataPerHalaman = 5;

$jumlahData = count (query("Select * from data_kontrakan"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset ($_GET["halaman"]))?$_GET["halaman"]:1;
 
$awalData = ($jumlahDataPerHalaman  * $halamanAktif) - $jumlahDataPerHalaman;


$user = query("SELECT * FROM data_kontrakan LIMIT	$awalData ,$jumlahDataPerHalaman");

 
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
  <title>Daftar data sewa kontrakan || Sistem HRD</title>

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
<h1> Daftar Sewa Kontrakan Pegawai </h1>

<form action="" method="post">
	<input type="text" name="keyword"  size="40" autofocus placeholder="masukkan keyword pencarian.."  autocomplete="off">
	<button type="submit" name="cari">Cari!</button>  
</form>
<br><br>
<button onclick="window.location.href = 'docmanage.php'"   class="btn btn-primary" name="submit"><span class="fa fa-plus"></span>  Tambahkan Data</button>
<br><br>
<table border="1"  class="table table-striped table-bordered table-hover" cellpadding="10" cellspacing="0">

<tr>
	<th>No.</th>
	<th>Nama Penyewa</th>
	<th>Luas Rumah</th>
	<th>Lokasi</th> 
	<th>Awal</th>
	<th>Akhir</th>
	<th>Nama Dokumen</td>
	<th>Dokumen</th>
	<th>Action</th>
</tr>
<?php   $i = 1; ?>
<?php
foreach( $user as $row ) : ?> 

<tr>
	<td><?= $i; ?></td>


	<td><?= $row["nama"]; ?></td>
	<td><?= $row["luas_rumah"]; ?></td>
	<td><?= $row["lokasi"]; ?></td>
	<td><?= $row["awal"]; ?></td>
    	<td><?= $row["akhir"]; ?></td>
	 <td><?=$row["nama_docs"]; ?></td>
        <td><?=$row["docs"]; ?></td>
		<td>
  <?php 
     
        ?>
			<a href=" hapusdocshow.php?id_data_kontrakan=<?=$row['id_data_kontrakan']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button></span></a>
			<a href="download.php?file=<?=$row['nama_docs']?>.pdf"><button class="btn btn-primary"><span class="glyphicon glyphicon-download"></button></span></a>
	

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