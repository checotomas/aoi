<style type="text/css">
	#espaciado{
		height: 5;
	}
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
	#h{
		font-size: 50;
	}	
	
</style>


<!DOCTYPE html>
<html>
<head>
	<title>Pago</title>
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
	<center>
		<div>
			<label id="h"><strong>Cuentas</strong></label>
		</div>
	</center>
	<div class="espaciado"></div>
	<table align="center" width="60%" bgcolor="#F9E79F" border="1">
			<thead bgcolor="#17202A">
				<tr>
					<td align="center" width="15%"><font color="white"><strong>Dia</strong></font></td>
					<td align="center" width="15%"><font color="white"><strong></strong></font></td>
					<td align="center" width="15%"><font color="white"><strong></strong></font></td>
					<td align="center" width="15%"><font color="white"><strong>Pagos Diarios</strong></font></td>
				</tr>
			</thead>
			<tbody>
				<?php
					$pago=0;
					$debe=0;
    				include("conexion.php");//conectar a la base de datos
					$fecha_actual=date("Y-m-d");
					$fechainicio=date("Y-m-d",strtotime($fecha_actual."- 6 days"));
					$fechafinal=date("Y-m-d");
					echo "<br>";
					$query=mysqli_query($conn,"SELECT * FROM cuentas WHERE fecha >= '$fechainicio' and fecha <= '$fechafinal'ORDER BY fecha ASC;");//hacer el select a la base de datos
					while ($row=mysqli_fetch_array($query)){//recorrido de los datos en la BD
						$row['id'];//extrae el id de los datos
						$pago_rep=$row['pago_rep'];
						$quedo=$row['quedo'];
				?>
				<tr align="center">
					<td><?php echo $row['fecha'];?></td>
					<?php
						if ($quedo>0) {
					?>
					<td><?php echo $quedo ;?></td>
					<td><?php echo '----------' ;?></td>
					<?php
						}else{
					?>
					<td><?php echo '----------' ;?></td>
					<td><?php echo $quedo ;?></td>
					<?php
						}
					?>
					<td><?php echo $pago_rep ;?></td>
				</tr>
				<?php
					$pago=$pago+$pago_rep;
					$debe=$debe+$quedo;
					$pago_neto=$pago+$debe;
					}//se cierra el while 
				?>
			</tbody>
		</table>
		<br>
		<table align="center" width="60%"  border="1">
			<thead >
				<tr>
					<td width="15%"><?php  ?></td>
					<td align='center' bgcolor="#F9E79F" width="30%"><?php echo $debe;  ?></td>
					<td align="center" bgcolor="#F9E79F" width="15%"><?php echo $pago;?></td>
				</tr>
			</thead>
		</table>
		<table align="center" width="60%"  border="1">
			<thead >
				<tr>
					<td width="45%"><?php  ?></td>
					<td align="center" bgcolor="#F9E79F" width="15%"><?php echo $debe;?></td>
				</tr>
			</thead>
		</table>
		<br>
		<table align="center" width="60%"  border="1">
			<thead >
				<tr>
					<td width="45%"><?php  ?></td>
					<td align="center" bgcolor="#F9E79F" width="15%"><?php echo $pago_neto;?></td>
				</tr>
			</thead>
		</table>
</body>
</html>