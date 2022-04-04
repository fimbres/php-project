<?php

include("php/conexion.php");

function limpiar_string($data, $BD){//esta funcion esta en el agregar.php
    $data = trim($data);
    $data = mysqli_real_escape_string($BD,$data);
    return $data;
}

if(!empty($_POST['tnombre']) && !empty($_POST['tusuario']) && !empty($_POST['tpassword']) )//para revisar que los campos no estén vacios

{
    $message='';

    $tnombre = limpiar_string($_POST['tnombre'],$conexion );//con limpiar-string evitamos inyecciones sql
    //var_dump($tnombre);
    $tusuario=limpiar_string($_POST['tusuario'],$conexion );
    $tpassword=limpiar_string($_POST['tpassword'],$conexion );

    $select = mysqli_query($conexion, "SELECT * FROM tb_usuarios WHERE usuario = '".$tusuario."'");

    if(mysqli_num_rows($select)) {

        echo "<script>alert('el usuario ya existe')</script>";// lanza una alerta por medio de un script
    // exit('This username already exists');
        }
    else{
        $query=mysqli_query($conexion,'CALL sp_insertar_usuarios("'.$tnombre.'","'.$tusuario.'","'.$tpassword.'")');

        if(!$query)
        {
            echo "<script>alert('ocurrio un error, verifica los campos')</script>";
        }
        else
        {
        //var_dump($query);
        echo "<script>alert('Usuario registrado')</script>";
        
        }
    
    }

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign up</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-white"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                       
                                    <!--<form method="POST" action="register.php" >-->
                                    <form action="register.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="tnombre" id="tnombre" type="text" placeholder="Enter your first name" />
                                                        <label for="tnombre">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="tusuario" id="tusuario" type="text" placeholder="Enter your last name" />
                                                        <label for="tusuario">User Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="tpassword" id="tpassword" type="password" placeholder="Create a password" />
                                                <label for="tPassword">Password</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit" >Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="small"><a href="login.html">¿tienes cuenta?, inicia sesión</a></div>
                                    <div class="card-footer text-center py-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>