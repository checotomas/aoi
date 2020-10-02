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
		font-size: 20;
		text-align: center;
		background-color: #F9E79F;
	}
	.fijos{
		width: 20%;
		height: 28;
		font-size: 20;
		text-align:center;
		background-color: #F9E79F;
	}
	.boton{
		width: 20%;
		height: 40;
		font-size: 20;
		background-color:#808B96;
		text-align: center;
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
		font-size: 20;
	}
	#h{
		font-size: 40;
	}
	
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Cuentas</title>
</head>
<body>
	<?php  
			session_start();
    		ob_start();
			if($_SESSION['SCC']<>1  ){//ver si ya inicio sesion
    	  		header('location:login.php');//si no inicio sesion redirecciona a login
			}
			include("conexion.php");
			$id=$_GET['id'];
			$query=mysqli_query($conn,"select *from cuentas where id='".$id."'");
			while ($row=mysqli_fetch_array($query)) {
				$fecha_completa=$row['fecha'];
				$de_13=$row['de_13'];
				$de_12=$row['de_12'];
				$de_11=$row['de_11'];
				$de_10=$row['de_10'];
				$suma_vendidos=$row['suma_vendidos'];
				$pago_rep=$row['pago_rep'];
				$md13=$row['md13'];
				$md12=$row['md12'];
				$md11=$row['md11'];
				$md10=$row['md10'];
				$suma_md=$row['suma_md'];
				$gastos=$row['gastos'];
				$debe_traer=$row['debe_traer'];
				$trajo=$row['trajo'];
				$quedo=$row['quedo'];

		}
		?>
		<center>
			<div id="sistema"><font color="1E8449"><h1>SCC</h1></font></div>
		</center>
		<br>
		<table width="100%">
			<tr>
				<td width="20%"></td>
				<td width="20%"></td>
				<td width="20%"></td>
				<td width="20%"></td>
				<form action="Principal.php">
					<td width="20%">
						<input type="submit" name="" value="Regresar" class="botones">
					</td>
				</form>
			</tr>
		</table>
		<div class="espaciado"></div>
		<center>
			<div>
				<label id="h"><strong>Cuentas</strong></label>
			</div>
		</center>
		<table bgcolor="#F9E79F" align="center" width="60%">
			<tr>
				<td width="20%"><input type="text" name="fecha_completa" readonly="true" class="select" value="<?php echo $fecha_completa ?>"></td>
				<td width="20%"></td>
				<td width="20%"></td>
			</tr>
			<tr>
				<td width="20%" align="RIGHT"><input type="text" name="suma_vendidos" readonly="true" class="fijos" value="<?php echo "13"?>"></td>
				<td width="20%"><input type="text" name="de_13" readonly="true" class="select" value="<?php echo $de_13 ?>"></td>
				<td width="20%"><input type="text" name="md13" readonly="true" class="select" value="<?php echo $md13 ?>"></td>
			</tr>
			<tr>
				<td width="20%" align="RIGHT"><input type="text" name="suma_vendidos" readonly="true" class="fijos" value="<?php echo "12"?>"></td>
				<td width="20%"><input type="text" name="de_12" readonly="true" class="select" value="<?php echo $de_12 ?>"></td>
				<td width="20%"><input type="text" name="md12" readonly="true" class="select" value="<?php echo $md12 ?>"></td>
			</tr>
			<tr>
				<td width="20%" align="RIGHT"><input type="text" name="suma_vendidos" readonly="true" class="fijos" value="<?php echo "11"?>"></td>
				<td width="20%"><input type="text" name="de_11" readonly="true" class="select" value="<?php echo $de_11 ?>"></td>
				<td width="20%"><input type="text" name="md11" readonly="true" class="select" value="<?php echo $md11 ?>"></td>
			</tr>
			<tr>
				<td width="20%" align="RIGHT"><input type="text" name="suma_vendidos" readonly="true" class="fijos" value="<?php echo "10"?>"></td>
				<td width="20%"><input type="text" name="de_10" readonly="true" class="select" value="<?php echo $de_10 ?>"></td>
				<td width="20%"><input type="text" name="md10" readonly="true" class="select" value="<?php echo $md10 ?>"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%" height="5px" bgcolor="#17202A"></td>
				<td width="20%" height="5px" bgcolor="#17202A"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"><input type="text" name="suma_vendidos" readonly="true" class="select" value="<?php echo $suma_vendidos ?>"></td>
				<td width="20%"><input type="text" name="suma_md" readonly="true" class="select" value="<?php echo $suma_md ?>"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"><input type="text" name="suma_vendidos" readonly="true" class="select" value="<?php echo "       2.5"?>"></td>
				<td width="20%"><input type="text" name="gastos" readonly="true" class="select" value="<?php echo $gastos ?>"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%" height="5px" bgcolor="#17202A"></td>
				<td width="20%" height="5px" bgcolor="#17202A"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"><input type="text" name="pago_rep" readonly="true" class="select" value="<?php echo $pago_rep ?>"></td>
				<td width="20%"><input type="text" name="debe_traer" readonly="true" class="select" value="<?php echo $debe_traer ?>"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"></td>
				<td width="20%"><input type="text" name="trajo" readonly="true" class="select" value="<?php echo $trajo ?>"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"></td>
				<td width="20%" height="5px" bgcolor="#17202A"></td>
			</tr>
			<tr>
				<td width="20%"></td>
				<td width="20%"></td>
				<td width="20%"><input type="text" name="quedo" readonly="true" class="select" value="<?php echo $quedo ?>"></td>
			</tr>
		</table>
</body>
</html>