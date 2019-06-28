
<?php

//delete.php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysqli:host=localhost;dbname=hrd_sql', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>
