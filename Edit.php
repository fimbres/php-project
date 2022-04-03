<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PHP Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            $idp = $_GET['producto'];
        ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-3" href="index.html">PHP Admin</a>
            <div class="d-flex">
                <button class="btn btn-link btn-sm order-1 m-1" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
                    <li class="nav-item dropdown justify-content-end">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Actions</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                See all the products
                            </a>
                            <a class="nav-link" href="add.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-add"></i></div>
                                Add a product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome back!</div>
                        *User name*
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit a product</h1>
                        <div class="card mb-4 mt-4">
                            <div class="card-body">
                                Here you can edit the selected product, you can change any atribute of the product in the database.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Product atributes
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                <label for="inputFirstName">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                <label for="inputLastName">Stock</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Price</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Edit Product</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Admin. Software 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
