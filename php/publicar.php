<?php
    session_start();
    if(isset($_SESSION['user'])){
        $id = 1;
        $nombre = "Ariel";
        $usuario = "Ariegl";
        $password = "12345";
        $query  = mysqli_query('CALL INSERTAR('$id','$nombre','$usuario','$password')');

        if(!$query)
        {
            echo 'ERROR AL INSERTAR DATOS';
        }
    }
    else{
        header('location: ../login.php');
    }
?>