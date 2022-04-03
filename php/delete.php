<?php
	header("Location: http://localhost:8080/PHP_Project/index.php"); /*the location should change*/
	require 'conexion.php';
	$variable_local = $_GET["idp"];
	$query = "call sp_eliminar_productos('$variable_local')";
	$res = mysqli_query($conexion, $query);
	exit();
?>
