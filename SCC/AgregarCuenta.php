<style type="text/css">
	/* dar diseño al div del titulo*/
	#sistema{
		font-family: Georgia, "Times New Roman",Times, serif;
		background-color: #F4D03F;
       	height:40;
	}
	.botones{
		width: 100%;
		height: 40;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
	}
	.boton{
		width: 50%;
		height: 30;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
	}
	.select{
		width: 80%;
		height: 30;
		font-size: 15;
	}
	.textarea{
		width: 60%;
		height:60;
	}
	#divtextarea{
		background-color: #F4D03F;
		height: 80;
		width: 30%;
	}
	#espaciado{
		height: 5;
	}
	.label {
		font-size: 25;
	}
	#h{
		font-size: 50;
	}	
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar Cuenta</title>
</head>
<body>
	<?php  
		session_start();
    	ob_start();
    	if($_SESSION['SCC']<>1  ){//ver si ya inicio sesion
   	  		header('location:login.php');//si no inicio sesion redirecciona a login
   		}
	?>
	<center>
		<div id="sistema"><font color="2A007B"><h1>SCC</h1></font></div>
	</center>
	<br>
	<table width="100%">
		<tr>
			<td width="25%"></td>
			<td width="25%"></td>
			<td width="25%"></td>
			<form action="Principal.php">
				<td width="25%">
					<input type="submit" name="" value="Regresar" class="botones">
				</td>
			</form>
		</tr>
	</table>
	<div class="espaciado"></div>
	<center>
		<div>
			<label id="h"><strong>Agregar Cuenta</strong></label>
		</div>
	</center>
	<form action="AgregarCuenta.php" method="POST">
		<table align="center" width="30%" bgcolor="F4D03F">
			<tr>
				<td height="10px"></td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">Fecha</label>
				</td>
				<td>
					<input type="date" class="select" name="fecha" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">12</label>
				</td>
				<td>
					<input type="number" class="select" name="doce" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">11</label>
				</td>
				<td>
					<input type="number" class="select" name="once" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">10</label>
				</td>
				<td>
					<input type="number" class="select" name="diez" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">Total de vendidos</label>
				</td>
				<td>
					<input type="number" class="select" name="vendidos" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">Gastos</label>
				</td>
				<td>
					<input type="number" class="select" name="gastos" required="">
				</td>
			</tr>
			<tr>
				<td align="Right">
					<label class="label">Dinero Que Trajo</label>
				</td>
				<td>
					<input type="text" class="select" name="dinerotrajo" required="">
				</td>
			</tr>
		</table>
		<center>
			<div id="divtextarea">
				<br>
				<input type="submit" value="Agregar" class="boton" name="agregarcuenta">
			</div>
		</center>
	</form>
	<?php
		include("conexion.php");
		if (isset($_POST['agregarcuenta'])) {
			$fechacompleta=date("D-j F Y");
			$fecha=$_POST['fecha'];
			$doce=$_POST['doce'];
			$once=$_POST['once'];
			$diez=$_POST['diez'];
			$gastos=$_POST['gastos'];
			$vendidos=$_POST['vendidos'];
			$dinero_trajo=$_POST['dinerotrajo'];
			$trece=$vendidos-($doce+$once+$diez);
			$pago_rep=$vendidos*2.5;
			$md13=$trece*13;
			$md12=$doce*12;
			$md11=$once*11;
			$md10=$diez*10;
			$suma_md=$md10+$md11+$md12+$md13;
			$debe_traer=$suma_md-$gastos;
			$quedo=$dinero_trajo-$debe_traer;
			$conn->query("insert into cuentas (fecha_completa,fecha,de_13 ,de_12 ,de_11,de_10 ,suma_vendidos,pago_rep ,md13 ,md12 ,md11 ,md10 ,suma_md ,gastos ,debe_traer ,trajo ,quedo) values ('$fechacompleta','$fecha','$trece','$doce' ,'$once','$diez','$vendidos','$pago_rep','$md13','$md12' ,'$md11' ,'$md10' ,'$suma_md' ,'$gastos' ,'$debe_traer' ,'$dinero_trajo' ,'$quedo');");
			if (mysqli_errno($conn)){
  	?>
		<script type="text/javascript">
  			alert("error");
		</script>
	<?php
  				}else{	
  	?>
		<script type="text/javascript">
  			alert("Guardado Correctamente");
		</script>
	<?php  						
   	}
		}
	?>
</body>
</html>