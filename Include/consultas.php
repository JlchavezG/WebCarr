<?php 
// llamar a la conexion de base de datos 
include "conect.php";
// genarar la consulta para abtraer los datos de los productos 
$Productos = "SELECT * FROM Productos ORDER BY NombreProducto ASC";
$EProductos = $ConnetBd->query($Productos);
$NProductos = $EProductos->num_rows;





?>