<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="alert/css/sweetalert.css">
  </head>
  <body>
<?php
  // session_start();
  $usernames = $_POST['username'];
  $passwords = $_POST['password'];

  require_once(dirname(__FILE__).'/conn.php');

  $query = "SELECT * FROM user WHERE username = '$usernames' and password = '$passwords'";
  $exect = mysqli_query($conn,$query);

  $user_konfirmasi = "";
  $pass_konfirmasi = "";

  while($row=mysqli_fetch_array($exect))
  {
    $user_konfirmasi = $row['username'];
    $pass_konfirmasi = $row['password'];
    $namalengkap = $row['namalengkap'];
    $nomortelepon = $row['nomortelepon'];
    $pas_photo = $row['pas_photo'];
    $id_user = $row['id_user'];
    $role = $row['role'];
  }
  if($usernames == $user_konfirmasi && $passwords == $pass_konfirmasi)
  {
    session_start();
    $_SESSION['is_logged_in'] = TRUE;
    $_SESSION['id_user'] = $id_user;
    $_SESSION['role'] = $role;
    if($role == 2)
    {
      $_SESSION['is_logged_in'] = TRUE;
      $_SESSION['namalengkap'] = $namalengkap;
      $_SESSION['nomortelepon'] = $nomortelepon;
      $_SESSION['pas_photo'] = $pas_photo;
      
            echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'Login success',
        type: 'success',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('../index.php');
    } ,1000); 
    </script>";
       
    }
    else if($role==1){
       echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'Login success',
        type: 'success',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('indexadmin.php');
    } ,1000); 
    </script>";
    }
    else if($role==3){
      $_SESSION['is_logged_in'] = TRUE;
      $_SESSION['namalengkap'] = $namalengkap;
      $_SESSION['nomortelepon'] = $nomortelepon;
      $_SESSION['pas_photo'] = $pas_photo;
      header("Location:supir/dosenui.php");
    }

  }
  else
  {
  echo "
    <script type='text/javascript'>
    setTimeout(function () {  
      swal({
        title: 'User ID dan Password masih salah',
        type: 'error',
        timer: 2000,
        
      });   
    },10);  
    window.setTimeout(function(){ 
      window.location.replace('login.php');
    } ,1000); 
    </script>";
      // header("Refresh:0 url=login.php");
  }

?>




<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>
</body>
</html>

