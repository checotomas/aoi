<?php
/*
	$servidor="34.66.142.177";
	$usuario="sergio";
	$contraseña="sergio";
	$basedatos="aoi_remote";
	$conn=mysqli_connect("$servidor","$usuario","$contraseña","$basedatos");
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
  	echo "Listo bd";
  	*/
  	$dns="/cloudsql/proyecto-pruebas-291115:us-central1:prueba;daname=prueba";
  	$user="root";
  	$pass="root";
  	$db = new PDO($dsn, $user, $pass);
  	echo $db;
?>