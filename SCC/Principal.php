<style type="text/css">
	/* dar diseño al div del titulo*/
	#sistema{
		font-family: Georgia, "Times New Roman",Times, serif;
		background-color: #F4D03F;
       	height:40;
	}
	#botones{
		height: 30;
		text-align: center;
	}
	#espaciado{
		height: 5;
	}
	.botones{
		width: 100%;
		height: 30;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
	}
	.btncuentas{
		width: 30%;
		height: 30;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
	}
	.btnAzul {
		display: block;
		width: 100px;
		padding: 5px 0 0 0;
		background: #4682B4;
		background: -moz-linear-gradient(top, #87CEEB 0%, #4682B4 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#87CEEB),color-stop(100%,#4682B4));
		box-shadow: inset 0px 0px 6px #fff;
		-webkit-box-shadow: inset 0px 0px 6px #fff;
		border: 1px solid #62C2F9;
		border-radius: 10px;
		font-size: 18;
		text-decoration: none;
		color: #17202A;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>
	<?php  
			session_start();
    		ob_start();
			if($_SESSION['SCC']<>1  ){//ver si ya inicio sesion
    	  		header('location:login.php');//si no inicio sesion redirecciona a login
    		}
    		$user=$_SESSION['user'];
    		include("conexion.php");//conectar a la base de datos
    		$query1=mysqli_query($conn,"select * from registro where nombre='$user' ");//hacer el select a la base de datos
			while ($row=mysqli_fetch_array($query1)){//recorrido de los datos en la BD
				$rol=$row['rol'];
			}
		?>
		<center>
			<div id="sistema"><font color="1E8449"><h1>SCC</h1></font></div>
		</center>
		<br>
		<div id="botones">
			<table width="100%">
				<tr>
					<td align="center" width="25%">
						<!-- boton de historial -->
						<form action="historial.php">
							<input type="submit" name="historial" class="botones" value="Historial">
						</form>
					</td>
					<td align="center" width="25%">
						<!-- boton de control usuarios -->
						<form action="ControlUsuarios.php">
						<?php
							if ($rol==="A") {
						?>
							<input type="submit" name="user" class="botones" value="Control Usuarios">
						<?php
							}							
						?>
						</form>
					</td>
					<td align="center" width="25%">
						<!-- boton de agregar -->
						<form action="AgregarCuenta.php">
							<input type="submit" name="agregar" class="botones" value="Agregar Cuenta">
						</form>
					</td>
					<td align="center" width="25%">
						<!-- boton de cerrar sesion -->
						<form action="CerrarSesion.php">
							<input type="submit" name="cerrar" class="botones" value="Cerrar Sesion" >
						</form>
					</td>
				</tr>
			</table>				
		</div>
		<div id="espaciado"></div>
		<table align="center" width="60%" bgcolor="#F9E79F" border="1">
			<thead bgcolor="#17202A">
				<tr>
					<td align="center"><font color="white"><strong>Dia</strong></font></td>
					<td align="center"><font color="white"><strong>Acciones</strong></font></td>
				</tr>
			</thead>
			<tbody>
				<?php
					$fecha_actual=date("Y-m-d");
					$fechainicio=date("Y-m-d",strtotime($fecha_actual."- 6 days"));
					$fechafinal=date("Y-m-d");
					echo "<br>";
					$query=mysqli_query($conn,"SELECT * FROM cuentas WHERE fecha >= '$fechainicio' and fecha <= '$fechafinal'ORDER BY fecha ASC;");//hacer el select a la base de datos
					while ($row=mysqli_fetch_array($query)){//recorrido de los datos en la BD
						$row['id'];//extrae el id de los datos
				?>
				<tr align="center">
					<td><?php echo $row['fecha'];?></td>
					<td align="center"> <a class="btnAzul" href="VerDetalles.php?id=<?php echo $row['id']; ?> ">Ver Detalles</a></td>
				</tr>
				<?php
					}//se cierra el while 
				?>
			</tbody>
		</table>
		<br>
		<form action="Pago.php">
			<center>
				<input type="submit" name="cuentas" class="btncuentas" value="Hacer Cuentas">
			</center>
		</form>
</body>
</html>