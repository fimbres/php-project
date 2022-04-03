<?php
    $id = 1;
    $nombre = "Ariel";
    $usuario = "Ariegl";
    $password = "12345";

    $query  = mysqli_query('CALL INSERTAR('$id','$nombre','$usuario','$password')');

    if(!$query)
    {
        echo 'Data insertion error!';
    }
?>