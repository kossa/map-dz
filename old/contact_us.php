<?php 
$nom = $_POST['nom'] ;
$mail = $_POST['mail'] ;
$message = $_POST['message'] ;

	
	 $headers .= 'To: hadjikouceyla@gmail.com' . "\r\n";
     $headers .= 'From: '.$mail. "\r\n";
     
     $msg = 'Nom = '.$nom."\r\n" ;
     $msg .= 'mail : '."\r\n".$mail."\r\n" ;
     $msg .= 'message : '."\r\n".$message."\r\n" ;


	$to = "hadjikouceyla@gmail.com";
	$subject = "contact Sawwitly";
	mail($to,$subject,$msg, $headers);

	
?>   