<?php
    $usuario = $_POST['Username'];
    $contraseña = $_POST['Password'];
    session_start();

    if(!empty($usuario) && !empty($contraseña))
    {
        require 'conexion.php';
        $query = "SELECT * FROM  tb_usuarios where usuario = '$usuario' and password = '$contraseña'";
        $res = mysqli_query($conexion,$query);
        $res = mysqli_fetch_array($res);
        if($res){
            $_SESSION['user'] = $usuario;
            header("location: ../index.php");
        }else{
            echo "<div class='alert alert-danger' role='alert'>The user was not there!</div>";
            include("../login.php");
        }
        mysqli_close($conexion);
    }else{
        echo "<div class='alert alert-warning' role='alert'>Both fields are required.</div>";
        include("../login.php");
    }
?>