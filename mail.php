<?php
  $destino="robles92.fce@gmail.com";
  $asunto="INFORMACION IMSA";
  $nombre=$_POST['nombre'];
  $comentario="
    Nombre:$_POST[nombre]
    Email:$_POST[email]
	Comentario:$_POST[com]
  ";
  
  $headers = 'From: '.$destino."\r\n".
    'Reply-To:'.$destino."\r\n".
    'X-Mailer: PHP/'.phpversion();
	
	mail($destino,$asunto,$comentario,$headers);
	echo "<a href=\"javascript:history.go(-1)\">Mensaje Enviado. Regresar</a>";
?>