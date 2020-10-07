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
	.HacerLogoCircular {
  		border-radius: 50%;
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
		<div id="Formulario">
			<h1>
			<font>
				<strong>
					Iniciar Sesion
				</strong>
			</font>
		</h1>
			<img class="HacerLogoCircular" src="Login.png" / width="200" height="200">
			<br><br>
			<form method="Post">
				<br><br>
				<input type="email" name="email" required="" placeholder="&nbsp; &nbsp;Email" class="Input">
				<br><br>
				<input type="password" name="password" required="" placeholder="&nbsp; &nbsp;Contraseña" class="Input">
			</form>
		</div>
	</center>
</body>
</html>