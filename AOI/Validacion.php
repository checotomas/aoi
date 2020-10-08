<?php

	session_start();
	ob_start();
	$email=$_POST['email'];
	$password=$_POST['password'];
	include("Conexion.php");
	$_SESSION['Logeo']=2;
	$query=mysqli_query($conn,"SELECT * FROM Registro WHERE Correo='$email' AND Contraseña='$password'");
	while ($consulta=mysqli_fetch_array($query)) {
		$_SESSION['Logeo']=1;
	}
	if ($_SESSION['Logeo']<>1) {
		header('location:Login.php');
		
	}else{
	echo "entramos";
}
?>