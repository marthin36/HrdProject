  <?php
  // koneksi kedatabase
  $conn = mysqli_connect("localhost","root","", "hrd_sql" ); 

  function querys($query) {
  	global $conn;
  	$result = mysqli_query($conn, $querys);
  	$rows = [];
  	while( $row = mysqli_fetch_assoc($result)){
  		$rows[] = $row;
  	}
  	return $rows;
  }

 

  function cari($keyword) {
  	$query = "SELECT * FROM file WHERE 
        name LIKE '%$keyword%'";
  	return query($query);
  }
 

  ?>