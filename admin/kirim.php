<?php

$nama= $_POST['nama'];
$hp= $_POST['hp'];
$alamat= $_POST['alamat'];
$usermail= $_POST['usermail'];
$body= "
Nama : $nama <br/>
Perihal : $hp <br/>
Isi: $alamat <br/>
Email: $usermail <br/>
";

function Send_Mail($to,$subject,$body)
{

	
	
require 'PHPmailer/class.phpmailer.php';

$usermail= $_POST['usermail'];
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 
$mail->SetFrom("marthintampubolon92@gmail.com","email sender");
$mail->Username = "marthintampubolon92@gmail.com";  // username gmail yang akan digunakan untuk mengirim email
$mail->Password = "marthinaja25";  // Password email
$mail->SetFrom($usermail, 'HRD Del');
$mail->AddReplyTo($usermail,'user');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->AddAddress($usermail);
if(!$mail->Send())
return false;
else
return true;
}

$to = "$usermail"; //email tujuan
$subject = "HRD Email"; // subject email
echo '<script type="text/javascript">

          window.onload = function () { alert("Email terkirim."); }
          

</script>';
echo " <script> window.setTimeout(function(){ 
      window.location.replace('kirimemail.php');
    } ,1000);</script>";

Send_Mail($to,$subject,$body);
?>