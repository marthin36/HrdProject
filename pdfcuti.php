<?php
//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='PDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
//Memulai proses untuk menyimpan variabel php dan html
ob_start();
?>
<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <th><img src="android.png" width="40px"></th>
                <th><h1>HARVIACODE</h1></th>
            </tr>
        </table>
        <p style="text-align: justify">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was
            popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
</body>
</html>
<?php
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>