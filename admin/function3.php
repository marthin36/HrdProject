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
  	$query = "SELECT * FROM data_kontrakan WHERE 
        nama LIKE '%$keyword%' OR
       luas_rumah LIKE '%$keyword%' OR
       lokasi LIKE '%$keyword%' OR
       awal LIKE '%$keyword%' OR
       akhir LIKE '%$keyword%' OR
       nama_docs LIKE '%$keyword%'";
  	return query($query);
  }
 

  ?>