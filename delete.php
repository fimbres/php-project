<?php
	require 'conexion.php';
	$variable_local = $_GET['idp'];
	$query = "call sp_eliminar_productos('$variable_local')";
	$res = mysqli_query($conexion, $query);
?>
