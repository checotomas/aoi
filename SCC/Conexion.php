<?php
	//ver si inicio sesion
	if ($_SESSION['SCC']<>1){//ver si sesion es diferente de 1
		header('location:login.php');//mandar a ventana login
	}
	//conectar con la base de datos
	$servidor="localhost";//servidor 
	$usuario="root";//usuario
	$contraseña="";//contraseña
	$basedatos="scc";//nombre de la base de datos

	$conn=mysqli_connect("$servidor","$usuario","$contraseña","$basedatos");
	// Comprueba conexión
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
?>
