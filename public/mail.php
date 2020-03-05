<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$empresa = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'gulansfutbolsala@gmail.com';
$asunto = $_POST['subject'];

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Refresh: 3; URL=/');

  echo '
  <p class="alert alert-success agileits" role="alert">Mensaje Enviado!<p>';

?>