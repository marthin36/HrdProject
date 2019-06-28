  <?php
  // koneksi kedatabase
  $conn = mysqli_connect("localhost","root","", "hrd_sql" ); 

  function query($query) {
  	global $conn;
  	$result = mysqli_query($conn, $query);
  	$rows = [];
  	while( $row = mysqli_fetch_assoc($result)){
  		$rows[] = $row;
  	}
  	return $rows;
  }

 

  function cari($keyword) {
  	$query = "SELECT * FROM user WHERE 
  	   namalengkap LIKE '%$keyword%' OR
  	   tanggallahir LIKE '%$keyword%' OR
  	   jenis_kelamin LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%' OR
  	  nomortelepon LIKE '%$keyword%' OR
        email LIKE '%$keyword%'OR
        pas_photo LIKE '%$keyword%'";
  	return query($query);
  }
 

  ?>