<?php
session_start();
$_SESSION['sesion']="";
session_destroy();
header('Location: ../index.php');
?>