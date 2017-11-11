<?php
session_start();
require_once 'conexion.php';
    
$user=$_POST['user'];
$pass=$_POST['password'];

$consulta="SELECT * FROM usuarios WHERE usuario='$user' ";

if($resultado=$conexion->query($consulta)){

	if($resultado->num_rows > 0){

		$row=$resultado->fetch_assoc();

		if($pass==$row['password']){
			$_SESSION['sesion']=1;
			header('Location: ../menu.php');
		}else{
			header('Location: ../index.php');
		}
	}else{
		header('Location: ../index.php');
	}
}

?>