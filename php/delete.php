<?php
	header("Location: ../index.php");
	require 'conexion.php';
	$variable_local = $_GET["idp"];
	$query = "call sp_eliminar_productos('$variable_local')";
	$res = mysqli_query($conexion, $query);
	echo "<div class='alert alert-success' role='alert'>The product has been successfully deleted.</div>";
    include("../index.php");
	exit();
?>
