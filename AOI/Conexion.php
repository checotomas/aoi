<?php

	$servidor="104.154.60.234";
	$usuario="Sergio";
	$contraseña="Sergio";
	$basedatos="aoi_remote";
	$conn=mysqli_connect("$servidor","$usuario","$contraseña","$basedatos");
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
  	echo "Listo bd";
?>