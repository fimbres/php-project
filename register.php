<?php

include("php/conexion.php");

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
                                        <form method="POST" enctype="multipart/form-data"><!-- metodo POST -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="name" type="text" placeholder="ingresa tu email" />
                                                        <label for="name">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control"  name="user" id="user"  placeholder="Ingrese un usuario" />
                                                        <label for="user">Usuario</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" name="password"  type="password" placeholder="Ingrese password" />
                                                <label for="password">Password</label>
                                            </div>
                                            <!---->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="cpassword" name="cpassword" type="password" placeholder="Confirma tu password" />
                                                <label for="cpassword">Confirma tu Password</label>
                                            </div>

                                            <div class="btn" role="group" aria-label="">
                                                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Registrar</button>

                                            </div>
                                            <!--
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                            </div>-->
                                        </form>
                                    </div>
                                    <div class="small"><a href="login.html">¿tienes cuenta? inicia sesión</a></div>
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
