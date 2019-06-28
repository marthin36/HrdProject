<?php
	//koneksi ke database
require 'functionpengumuman.php';
$pengumuman = query("SELECT * FROM pengumuman");

//tomnol cari diclick
if( isset($_POST["cari"])){
	$pengumuman = cari($_POST["keyword"]);
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
  <title>Pengumuman</title>

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
<div class="form-panel" style="height:1200px">
<h1> Daftar Pengumuman   </h1>
<br>
 	<a href="pengumuman.php"><button class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Pengumuman</button></span></a>

<br><br>
<form action="" method="post">
	<input type="text" name="keyword"  size="40" autofocus placeholder="Cari Pengumuman"  autocomplete="off">
	<button type="submit" name="cari">Cari!</button>  
</form>

<br>
<table border="1"  class="table table-striped table-bordered table-hover" cellpadding="10" cellspacing="0">

<tr>
	<th>No.</th>
	<th>Judul</th>
    <th>Deskripsi</th>
    <th>Tanggal </th>
    <th>Action</th>

</tr>
<?php   $i = 1; ?>
<?php
foreach( $pengumuman as $row ) : ?> 

<tr>
	<td><?= $i; ?></td>

	
    <td><?= $row["judul"]; ?></td>
    <td><?= $row["deskripsi"]; ?></td>
	<td><?= $row["publish"]; ?></td>
	
		<td>
 	<a href=" detailpengumuman.php?id_pengumuman=<?=$row['id_pengumuman']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></button></span></a>
  	<a href=" hapuspengumuman.php?id_pengumuman=<?=$row['id_pengumuman']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button></span></a>
  


</tr>

<?php $i++; ?>
<?php endforeach; ?>
</table>

</div>
</body>
</html> 