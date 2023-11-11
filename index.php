<?php 
// incluir el archivo de conexion 
include "include/conect.php";
include "include/login.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio de Sistema | Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div id="Login">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h1 class="text-center">
                            <span class="fs-5">Login |</span>
                            <span class="fs-5 text-warning"> Carrito de compra</span>
                        </h1>

                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="text" name="Usuario" id="User" placeholder="Usuario" class="form-control">
                            <input type="password" name="Password" id="Pass" placeholder="Password" class="form-control mt-2">
                            <div class="d-grid gap-2">
                                <input type="submit" value="Ingresar" name="BtnIngresar" class="btn btn-sm btn-outline-success rounded-pill mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>