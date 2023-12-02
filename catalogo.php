<?php
include "include/conect.php";
include "include/consultas.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Catalogo de Productos | Carrito de compra </title>
</head>

<body>

    <div class="container">
        <div class="row">
            <span class="text-center mt-3 display-6">Carrito de Compra</span>
        </div>
        <div class="row mt-2 text-end">
             <span class="text-end text-success"> Numero de Productos: <?php echo $NProductos; ?> </span>
        </div>
        <?php while($row = $EProductos->fetch_assoc()){?>
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <img src="img/productos/<?php echo $row['ImagenProducto']; ?>" class="card-img" alt="" style="width:150px;">
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="row">
                                <h2 class="fs-5 mt-3"><?php echo $row['NombreProducto']; ?></h2>
                            </div>
                            <div class="row">
                                <p class="fs-6 text-muted">Descripción:<?php echo $row['Descripcion']; ?></p>
                                <p class="text-danger">Precio: MNX <?php echo$row['Precio']; ?></p>
                            </div>
                            <div class="row mt-2 py-2">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <input type="hidden" name="IdProduct" id="IdProduct" value="<?php echo $row['Id_Producto']; ?>">
                                    <input type="hidden" name="NameProduct" id="NameProduct" value="<?php echo $row['NombreProducto']; ?>">
                                    <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo $row['Descripcion']; ?>">
                                    <input type="hidden" name="Precio" id="Precio" value="<?php echo $row['Precio']; ?>">
                                    <input type="number" name="Cantidad" id="Cantidad" min="1" max="10" class="form-control" placeholder="selecciona la cantidad">
                                    <div class="row mt-2">
                                        <input type="submit" value="Enviar al carrito" class="btn btn-sm btn-success" name="btn_carrito">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>