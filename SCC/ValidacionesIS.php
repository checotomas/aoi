<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		//iniciar variables de sesion
		session_start();
		ob_start();
		$user=$_POST['nombre'];//arrastro el nombre y lo pongo en una variable
		$pass=$_POST['password'];//arrastro la contraseña y la pongo en una variable
		$_SESSION['user']=$user;
		include("Conexion.php");//conexion a la base de datos
		$_SESSION['SCC']=2;//datos incorrectos
		$query=mysqli_query($conn,"select * from registro where nombre='$user' and pass='$pass'");
		while ($consulta=mysqli_fetch_array($query)) {
			$_SESSION['SCC']=1;//datos correctos
		}
		if ($_SESSION['SCC']<>1) {
			header('location:login.php');//redirecciona a login por datos incorrectos
		}
		header('location:principal.php');//redirecciona a principal ya que los datos son correctos
	?>
</body>
</html>