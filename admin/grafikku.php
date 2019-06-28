     <?php
           include 'conn.php';
$ID = $_GET['ID'];
$pegawai  = mysqli_query($conn, "select * from pegawai where ID='$ID'");
$row        = mysqli_fetch_array($pegawai);
?>
<!DOCTYPE html>
<html>

<body>
<form method="post" action="updategrafik.php">
     <input type="hidden" value="<?php echo $row['ID'];?>" name="ID">
            
<tr><td>Total</td><td><input type="text" value="<?php echo $row['total'];?>" name="total"></td></tr>
  </table>
        </form>
    </body>
</html>