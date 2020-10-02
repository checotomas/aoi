<style type="text/css">
	/* dar diseño al div del titulo*/
	#sistema{
		font-family: Georgia, "Times New Roman",Times, serif;
		background-color: #F4D03F;
       	height:40;
	}
	.botones{
		width: 100%;
		height: 30;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
	}
	.select{
		width: 100%;
		height: 28;
		font-size: 15;
	}
	#espaciado{
		height: 5;
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
    	  		header('location:Login.php');//si no inicio sesion redirecciona a login
			}
		?>
		<center>
			<div id="sistema"><font color="1E8449"><h1>SCC</h1></font></div>
		</center>
		<br>
		<table width="100%">
		<tr>
			<form action="Historial.php" method="post">
				<td width="25%" align="center">
					<select class="select" required="" name="año">
						<?php
							include("conexion.php");
							$query=mysqli_query($conn,"SELECT DISTINCT LEFT(fecha,4) FROM cuentas; ");//se obtienen los años
						?>
						<option value="">Selecciona año</option>
						<?php
							foreach ($query as $opciones):echo $opciones //busca los años y los extrae
						?>
						<option value="<?php echo $opciones['LEFT(fecha,4)']?>">
							<?php
								echo $opciones['LEFT(fecha,4)'];//se muetran los años 
							?>
						</option>
						<?php
							endforeach
						?>
					</select>
				</td>
				<td width="25%">
					<select  class="select"  name="mes">
        				<option value="">Seleccionar mes</option>
        				<option value="-01-" >Enero</option>
        				<option value="-02-" >Febrero</option>
    	    			<option value="-03-" >Marzo</option>
	        			<option value="-04-" >Abril</option>
        				<option value="-05-" >Mayo</option>
       					<option value="-06-" >Junio</option>
       					<option value="-07-" >Julio</option>
       					<option value="-08-" >Agosto</option>
    	   				<option value="-09-" >Septiembre</option>
	       				<option value="-10-" >Octubre</option>
       					<option value="-11-" >Noviembre</option>
       					<option value="-12-" >Diciembre</option>
      				</select>
				</td>
				<td width="25%" align="center">
					<input type="submit" value="Buscar" name="buscar" class="botones">
				</td>
			</form>
			<form action="principal.php">
				<td width="25%" align="center">
					<input type="submit" class="botones" value="Regresar" name="">
				</td>
			</form>
		</tr>
	</table>
	<div class="espaciado"></div>
	<table align="center" width="60%" bgcolor="#F9E79F" border="1">
			<thead bgcolor="#17202A">
				<tr>
					<td align="center"><font color="white"><strong>Dia</strong></font></td>
					<td align="center"><font color="white"><strong>Acciones</strong></font></td>
				</tr>
			</thead>
			<tbody>
				<?php
				if (isset($_POST['buscar'])) {
					$año=$_POST['año'];
					$mes=$_POST['mes'];
					$buscador=$año.$mes;
					$query1=mysqli_query($conn,"select * from cuentas where fecha like '%$buscador%' order by fecha asc");
					while ($row=mysqli_fetch_array($query1)) {
						$row['id'];
				?>
				<tr align="center">
					<td><?php echo $row['fecha'];?></td>
					<td align="center"> <a class="btnAzul" href="VerDetalles.php?id=<?php echo $row['id']; ?> ">Ver Detalles</a></td>
				</tr>
				<?php 
					}
						}
				?>
			</tbody>
		</table>
</body>
</html>