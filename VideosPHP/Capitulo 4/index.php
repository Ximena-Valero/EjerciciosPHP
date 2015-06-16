<?php

      session_start();
    /*
      $_SESSION['usuario'] = "ximena";
      $_SESSION['contrasena'] = "andres";
	*/

    if (isset($_SESSION['usuario'])) {
    	 echo '
			
			<html>
			    <head>
			       <meta http-equiv="REFRESH" content="0; 
			       url=principal.php">
			    </head>
			</html>      
       ';
    }else{
    	 echo '
			
			<html>
			    <head>
			       <meta http-equiv="REFRESH" content="0; 
			       url=frmlogin.php">
			    </head>
			</html>      
       ';

    }

     
?>