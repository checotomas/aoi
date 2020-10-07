	


<?php
		
  	
	$servidor="34.121.172.229";
	$usuario="root";
	$contraseña="root";
	$basedatos="prueba";
	$conn=mysqli_connect("$servidor","$usuario","$contraseña","$basedatos",3306);
	if (mysqli_connect_errno()){
  		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  	}
  	echo "Listo bd";

  	/*
  $dns="/cloudsql/proyecto-pruebas-291115:us-central1:prueba;dbname=prueba";
  	$user="root";
  	$pass="root";
  	$db = new PDO($dsn, $user, $pass);
  	echo $db;
  	*/
  	//mysql:"host=127.0.0.1";port="3306";unix_socket="/cloudsql/<Project ID>:<Location>:<Instance>;dbname=<Database Name>"



?>