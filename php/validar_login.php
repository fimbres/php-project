<?php
    $usuario = $_POST['Username'];
    $contraseña = $_POST['Password'];
    session_start();

    if(empty($usuario) || empty($contraseña))
    {
        echo "<div class='alert alert-warning' role='alert'>Both fields are required.</div>";
        include("../login.php");
    }else{
        require 'conexion.php';
        $query = "SELECT * FROM  tb_usuarios where usuario = '$usuario' and password = '$contraseña'";
        $res = mysqli_query($conexion,$query);

        if($res){
            $_SESSION['user'] = $usuario;
            header("location: ../index.php");
        }else{
            echo "<div class='alert alert-danger' role='alert'>Authentication error!</div>";
            include("../login.php");
        }
        mysqli_free_result($res);
        mysqli_close($conexion);
    }
?>