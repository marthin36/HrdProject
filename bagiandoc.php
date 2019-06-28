<!DOCTYPE html>
<html>
<head>
  <title>Upload dan Download File</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--Script CSS-->
  <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
  
</head>
<body>
  <br /><br />
  <div class="container">
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     <div class="navbar-header">
      <a class="navbar-brand" >Upload File </a>
      
    </div>
  </div>
</nav>
<br />
<br />
<form class="form-inline" method="POST" action="uploaduser.php" enctype="multipart/form-data">
 <input class="form-control" type="file" name="upload"/>


  <input class="form-control" type="text"  placeholder="Masukkan Kategori File" name="kategori"/>
 <button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>

</form>
<br /><br />
<div class="form-group">

  <table id="example" class="display responsive nowrap" style="width:100%">
    <thead>
      <tr>  
        <th>No</th>
        <th>File Name</th>
            <th>Nama Pengirim</th>
            <th>Kategori</th>
            
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="alert-success">
      <?php
      require 'conn.php';
   
      $idku = $_SESSION['id_user'];
     $row = $conn->query("SELECT * FROM `file` WHERE role = 2 AND id_user = '$id'") or die(mysqli_error());
      while($fetch = $row->fetch_array()){
       ?>
       <tr>
        <?php 
        $nama_file = explode('/', $fetch['file']);
        ?>
        <td><?php echo $fetch['file_id']?></td>
        <td><?php echo $fetch['nama_file']?></td>
        <td><?php echo $fetch['nama_pengirim']?></td>
          <td><?php echo $fetch['kategori']?></td>
               <td><a href="download.php?file=<?php echo $nama_file[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a>
          <a href="hapusdoc.php?file_id=<?=$fetch ['file_id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> hapus</a></td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>

</div>


<!--Script Javascript-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script>
 $(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>
</body>
</html>