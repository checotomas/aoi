<style type="text/css">
	/*	dar diseño  a p de datos incorrectos*/
	#parrafo{
		font-family: Georgia, "Times New Roman",Times, serif;
		font-size: 20 ;
       	width:400;
       	height:50;
    }
	/* dar diseño al div del formulario*/
	#formulario{
		background-color: #ABB2B9;
		width:400;
		height:450;
	}
	/* dar diseño al div del titulo*/
	#sistema{
		font-family: Georgia, "Times New Roman",Times, serif;
		background-color: #F4D03F;
       	height:40;
	}
	.text{
		width: 50%;
	}
	.label {
  		display: block;
		font-size: 20;
	}
</style>

<!DOCTYPE html>
<html>
	<head>
		<title>Inicio Sesión</title>
	</head>
	<body>
		<center>
			<div id="sistema"><font color="#1E8449"><h1>SCC</h1></font></div>
		</center>
		<center>
			<p id="parrafo">
				<br>
				<?php
					session_start();//iniciar las variables de sesion
					ob_start();
					if ($_SESSION['SCC']==2) {//ver si la session es igual a 2
						echo "Datos Incorrectos";//mensaje a mostrar
						$_SESSION['SCC']=0;//dar el valor de 0 a session
					}
				?>
			</p>
		</center>
		<center>
			<div id="formulario">
				<!--titulo e imagen de inicio de sesion-->
				<h2><strong>Iniciar Sesión</strong></h2>	
				<img src="logo.png" width="200" height="200">
				<br><br>
				<!--formulario inicio sesion-->
				<form method="post" action="ValidacionesIS.php">
					<!--introduce el nombre-->
					<label class="label">Nombre: </label>
					<input type="text" name="nombre" required="" class="text" placeholder="Nombre">
					<br><br>
					<!--introduce la contraseña-->
					<label class="label">Contraseña: </label>
					<input type="password" name="password" class="text" required="" placeholder="Contraseña" minlength="5">
					<br><br><br>
					<!--boton para enviar los datos-->
					<input type="submit" name="enviar" value="Iniciar Sesión">
				</form>
			
			</div>
		</center>
	</body>
</html>

