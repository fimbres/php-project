<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Simple Web Application For Products Management." />
        <meta name="author" content="472 UABC Group" />
        <title>Log in</title>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
            <link href="../css/styles.css" rel="stylesheet" />
        <?php } else{?>
            <link href="css/styles.css" rel="stylesheet" />
        <?php }?>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-white"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
                                            action="../php/validar_login.php"
                                            <?php } else{?>
                                                action="php/validar_login.php"
                                            <?php }?>
                                            method="post">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="Username" name ="Username" type="text" placeholder="Example69" />
                                                    <label for="Username">Username</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="Password" name ="Password" type="password" placeholder="Password" />
                                                    <label for="Password">Password</label>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <input class="btn btn-primary w-100" type="submit" value="Log In">    
                                                </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
            <script src="../js/scripts.js"></script>
        <?php } else{?>
            <script src="js/scripts.js"></script>
        <?php }?>
        
    </body>
</html>
