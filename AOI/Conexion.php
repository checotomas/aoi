<?php

	$servidor="35.193.62.172";
	$usuario="Sergio";
	$contraseña="Sergio";
	$basedatos="aoi_remote";
	$conn=mysqli_connect("$servidor","$usuario","$contraseña","$basedatos");
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
  	echo "Listo bd";
?>