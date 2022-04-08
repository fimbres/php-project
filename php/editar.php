<?php
    require 'conexion.php';

    $idp = $_POST['idp'];
    $name_p = $_POST['nombre'];
    $stock_p = $_POST['stock'];
    $price_p = $_POST['precio'];

    if(!empty($idp) & !empty($name_p) & !empty($stock_p) & !empty($price_p))
    {
        $query = "call sp_editar_productos('$idp','$name_p','$stock_p','$price_p')";
	    $res = mysqli_query($conexion, $query);
    }

    header("location: ../index.php");   
?> 