<?php
	// Datos de la base de datos
   $usuario = "root";
   $password = "mario";
   $servidor = "localhost";
   $basededatos = "proyecto";
   
   // creaci�n de la conexi�n a la base de datos con mysql_connect()
   $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

	if($conexion){
		mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	}
?>