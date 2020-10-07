<?php

	$servidor="localhost";//servidor 
	$usuario="root";//usuario
	$contraseña="";//contraseña
	$basedatos="aoi_remote";
	$conn=new PDO("$servidor","$usuario","$contraseña","$basedatos");
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
  	echo "Listo bd";
?>