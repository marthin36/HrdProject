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
  	$query = "SELECT * FROM pengumuman WHERE 
  	   judul LIKE '%$keyword%' OR
          deskripsi LIKE '%$keyword%' OR
  	   publish LIKE '%$keyword%'";
  	return query($query);
  }
 

  ?>