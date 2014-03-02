<?php 
$nom = $_POST['nom'] ;
$nom_part = $_POST['nom_part'] ;
$nb = $_POST['nb'] ;
$mail = $_POST['mail'] ;
$num_tel = $_POST['num_tel'] ;

	
	 $headers .= 'To: imaginical@googlegroups.com' . "\r\n";
     $headers .= 'From: '.$mail. "\r\n";
     
     $msg = 'Nom = '.$nom."\r\n" ;
     $msg .= 'Nom du partie = '.$nom_part."\r\n";
     $msg .= 'Nombre de condidats = '.$nb."\r\n";
     $msg .= 'num tel : '."\r\n".$num_tel."\r\n" ;


	$to = "imaginical@googlegroups.com";
	$subject = "contact Sawwitly(New HIZB)";
	mail($to,$subject,$msg, $headers);

	
?>   