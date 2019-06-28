<?php 
session_start();
  require_once("conn.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Surat Izin Cuti</title>
</head>
<body>

	<center>
		<h2>Surat Izin Cuti Pegawai</h2>
	
	</center>

    <div style=”text-align:justify;width:75%; background-color:#ff9999; border:1px solid #000099; padding:0px;”><img src="logo.jpg" width="100px;" style=”float:right; margin:0 8px 4px 0;” /><p></p></div>




	
<?php
				$id_cuti= $_GET['id_cuti'];
		              $query = "SELECT * FROM cuti WHERE id_cuti = $id_cuti";
		              $cuti = mysqli_query($conn, $query);
		              while($cutis = mysqli_fetch_array($cuti)){
		           ?>
                        <p> DIBERIKAN IZIN CUTI :</p>
                   	<td><?=$cutis['nama']?></td>
                       			

            <P><b> Rencana Cuti </b> </p>

            <p>Mulai Cuti   : <?=$cutis['mulaicuti']?> </p>
                    
                      <p>Selesai Cuti :  <?=$cutis['selesaicuti']?>  </p>   

                      <p>Keperluan:  <?=$cutis['alasan']?>
                             
      <table cellpadding="70">
      <tr>
      <td>Pemohon</td>
       <td>Menyetujui</td>
       <td>Menyetujui</td>
      </tr>
    
      <tr>
     <td> <?=$cutis['nama']?></td>
     <td>Atasan</td>
     <td>Pihak HRD</td>
      </tr>
      
      </table>
    <?php } ?>
	<script>
		window.print();
         window.location.replace('tablecuti.php');
	</script>
    <?php ?>  
 
	
</body>
</html>