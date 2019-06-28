<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

include("koneksi.php");
$result = mysqli_query($connect,"SELECT * FROM mahasiswa");
$header = mysqli_query($connect,"SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='mahasiswa'");

$pdf = new FPDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',12);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(90,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(90,12,$column,1);
}
$pdf->Output();
?>