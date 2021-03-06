<?php
    session_start();
    if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Simple Web Application For Products Management." />
        <meta name="author" content="472 UABC Group" />
        <title>PHP Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-between align-items-center">
            <a class="navbar-brand ps-3" href="index.php">PHP Admin</a>
            <div class="d-flex">
                <button class="btn btn-link btn-sm order-1 m-1" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
                    <li class="nav-item dropdown justify-content-end">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="php/logout.php">Logout</a></li>
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
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                See all the products
                            </a>
                            <a class="nav-link" href="Add.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-add"></i></div>
                                Add a product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome back!</div>
                        <?php echo $_SESSION['user']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <div class="card mb-4 mt-4">
                            <div class="card-body">
                                Here you can see all the products available, if you choose a product in this table you can delete or modify it.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All the products
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            require 'php/conexion.php';
                                            $query = "SELECT * FROM tb_productos";
                                            $res = mysqli_query($conexion,$query);
                                            while($fila = mysqli_fetch_array($res))
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $fila['nombre_producto'];?></td>
                                                <td><?php echo $fila['stock'];?></td>
                                                <td><?php echo $fila['precio'];?></td>
                                                <?php 
                                                    $id = $fila['idp'];
                                                    $name_p = $fila['nombre_producto'];
                                                    $stock_p = $fila['stock'];
                                                    $price_p = $fila['precio'];
                                                ?>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="Edit.php?producto=<?php echo $id;?>&name_p=<?php echo $name_p;?>&stock_p=<?php echo $stock_p;?>&price_p=<?php echo $price_p;?>"><button class="btn btn-warning w-40 m-1">Edit</button></a>
                                                        <a onclick="confirmDelete()" href="php/delete.php?idp=<?php echo $id;?>"><button class="btn btn-danger w-40 m-1 ">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
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
	<script>
		function confirmDelete(){
			var result = confirm('Are you sure to remove this product?');
			if (result == false){
				event.preventDefault();
			}
		}
	</script>
    </body>
</html>
<?php
    }
    else{
        header('location: login.php');
    }
?>