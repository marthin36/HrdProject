<?php
	//koneksi ke database
require 'function.php';
$user = query("SELECT * FROM user");

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
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
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

<h1> Daftar User </h1>

<form action="" method="post">
	<input type="text" name="keyword"  size="40" autofocus placeholder="masukkan keyword pencarian.."  autocomplete="off">
	<button type="submit" name="cari">Cari!</button>  
</form>

<br>
<table border="1"  class="table table-striped table-bordered table-hover" cellpadding="10" cellspacing="0">

<tr>
	<th>No.</th>
	<th>Photo</th>
	<th>Nama</th>
	<th>Tanggal Lahir</th> 
	<th>Jenis Kelamin</th>
	<td>Alamat</th>
	<th>No Hp</th>
	<th>Email</th>
	<th>Action</th>
</tr>
<?php   $i = 1; ?>
<?php
foreach( $user as $row ) : ?> 

<tr>
	<td><?= $i; ?></td>

	<td><img src="img/<?= $row["pas_photo"]; ?>" width="50" height="50" ></td> 
	<td><?= $row["namalengkap"]; ?></td>
	<td><?= $row["tanggallahir"]; ?></td>
	<td><?= $row["jenis_kelamin"]; ?></td>
	<td><?= $row["alamat"]; ?></td>
    	<td><?= $row["nomortelepon"]; ?></td>
        	<td><?= $row["email"]; ?></td>
		<td>
		<a href ="">Ubah</a> |
		<a href="">Hapus</a>
	</td>

</tr>

<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html> 