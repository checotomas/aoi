<style type="text/css">
	
	#Formulario{
		width: 400;
		height: 450;
		background-color:rgba(171, 178, 185,.9);
	}
	#NombreAplicacion{
		font-family: Georgia, "Times New Roman",Times, serif;
       	height: 7%;
       	background-color:rgba(255,255,255,0.7);
       	width: 100%;
	}
	#DatosIncorrectos{
		background: #FB0000;
		color: #fff;
		animation: DatosIncorrectos 2.72s ease infinite;
		transform-origin: 50% 50%;
		-webkit-transition: 0.5s ease-out;
		-moz-transition: 0.5s ease-out;
		-o-transition: 0.5s ease-out;
		transition: 0.5s ease-out;
		text-align: center;
		font-size: 20px;
		padding: 5px;
		margin-bottom: 10px;
		clear: both;
		display: block;
		width: 350;
		-webkit-border-radius: 6px;
		-moz-border-radis: 6px;
		border-radius: 6px;
	}
    @keyframes DatosIncorrectos{
		0% { transform:translate(0,0) }
		4.41177% { transform:translate(5px,0) }
		8.82353% { transform:translate(0,0) }
		13.23529% { transform:translate(5px,0) }
		17.64706% { transform:translate(0,0) }
		22.05882% { transform:translate(5px,0) }
		26.47059% { transform:translate(0,0) }
		100% { transform:translate(0,0) }
}

	.HacerLogoCircular {
  		border-radius: 50%;
  		border: 2px solid #0016b0;
	}
	.Label {
  		display: block;
		font-size: 20;
		text-align: left;
	}
	.Input{
		width: 90%;
		text-align: left;
		height: 8%
	}
	::placeholder { 
		color: black;
		font-size:16 ;
    	font-style: Times New Roman;
	}
	 .BotonIS{
    	text-decoration: none;
    	padding: 10px;
    	font-weight: 600;
    	font-size: 12px;
    	color: #ffffff;
    	background-color: #1883ba;
    	border-radius: 6px;
    	border: 2px solid #0016b0;
  	}
  	.BotonIS:hover{
    	color: #1883ba;
    	background-color: #ffffff;
  	}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body background= http://img1.wsimg.com/isteam/ip/777077ab-726a-452a-94cb-6678f525981e/AdobeStock_123758839-scaled.jpeg >

	<div id="NombreAplicacion">
		
		<h1>
			&nbsp;	&nbsp;
			<font>
				Automation Of
			</font>
			<font color="0612A4">
				Ideas
			</font>
			&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;&nbsp;
			<font>
			AOI-Remote
			</font>
		</h1>
	</div>
	<br><br><br>
	<center>
			<?php
				session_start();
				ob_start();

				if ($_SESSION['Logeo']==2) {
			?>
					<p id="DatosIncorrectos">
			<?php

						echo "Datos Incorrectos";
			?>
					</p>
			<?php
					$_SESSION['Logeo']=0;
				}
			?>
		
	</center>
	<center>
		<div id="Formulario">
			<h1>
			<font>
				<strong>
					Iniciar Sesion
				</strong>
			</font>
		</h1>
			<img class="HacerLogoCircular" src="Login.png" / width="200" height="200">
			<form method="post" action="Validacion.php">
				<br>
				<input type="email" name="email" required="" placeholder="&nbsp; &nbsp;Email" class="Input">
				<br><br>
				<input type="password" name="password" required="" placeholder="&nbsp; &nbsp;Contraseña" class="Input">
				<br><br>
				<input type="submit" name="enviar" value="Iniciar Sesion" class="BotonIS">
			</form>
		</div>
	</center>
</body>
</html>