<?php
include "include/conect.php";
include "include/consultas.php";
$Bproducto = "SELECT * FROM Productos ORDER BY Id_Producto";
$E = $ConnetBd->query($Bproducto);


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
        <div class="row mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h5 class="text-center">Ver todas las categorias del carrito</h5>
            </div>
            <div class="row">
                <span>Total de productos: <?php echo $NProductos; ?></span>
            </div>
            <div class="row mt-2">
            <?php while($row = $E->fetch_assoc()){ ?>
                <div class="card shadow mb3" style="max-width:540px">
                    <div class="row no-gutters">
                        <div class="col-sm-4 col-sm-4 col-lg-4">
                            <img src="img/productos/<?php echo $row['ImagenProducto']; ?>" alt="Figura de accion" class="card-img" style="width:150px;">
                        </div>
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['NombreProducto']; ?></h5>
                                <p class="card-text">Descripción: <?php echo $row['Descripcion']; ?></p>
                                <p class="card-text"><small class="text-muted">Precio: MNX <?php echo $row['Precio']; ?></small></p>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                  <form mane="productos" action="" method="Post">
                                      <input type="hidden" name="id" placeholder="Id_del producto">
                                      <input type="hidden" name="nombre" placeholder="Nombre del producto">
                                      <input type="hidden" name="precio" placeholder="precio del producto">
                                      <input type="hidden" name="numero" placeholder="Numero de producto"> 
                                      <div>
                                        <button type="submit" name="btn_carrito" value="Agregar a carrito" class="btn btn-sm btn-success">Agregar al carrito</button>
                                      </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>