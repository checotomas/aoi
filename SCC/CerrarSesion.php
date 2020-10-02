	<?php  
		session_start();
    	ob_start();
    	if($_SESSION['SCC']<>1  ){//ver si ya inicio sesion
   	  		header('location:login.php');//si no inicio sesion redirecciona a login
   		}
      $_SESSION['user']=0;
      $_SESSION['SCC']=10;
      header('location:login.php')
	?>