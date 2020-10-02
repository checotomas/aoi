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
		width: 20%;
		height: 40;
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
		background-color: #ABEBC6;
		height: 100;
		width: 60%;
	}
	#espaciado{
		height: 5;
	}
	.label {
  		display: block;
		font-size: 25;
	}
	#h{
		font-size: 50;
	}	
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Control de Usuarios</title>
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
		<div id="sistema"><font color="2A007B"><h1>SCG</h1></font></div>
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
	<table align="center" width="60%" bgcolor="#F9E79F" border="1">
		<thead bgcolor="#17202A">
			<tr>
				<td align="center"><font color="white"><strong>Nombre</strong></font></td>
				<td align="center"><font color="white"><strong>Rol</strong></font></td>
			</tr>
		</thead>
		<tbody>
			<?php
				include("conexion.php");//conectar a la base de datos
				$query=mysqli_query($conn,"select * from registro");//hacer el select a la base de datos
				while ($row=mysqli_fetch_array($query)){//recorrido de los datos en la BD
					$row['id'];//extrae el id de los datos
				?>
				<tr align="center">
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['rol'];?></td>
				</tr>
				<?php
					}//se cierra el while 
				?>
		</tbody>
	</table>
</body>
</html>