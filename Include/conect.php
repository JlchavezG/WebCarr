<?php 
$mensaje = "";
$Server = "localhost";
$UserServer = "root";
$PassServer = "";
$Bd = "WebCarr";
$ConnetBd = mysqli_connect($Server,$UserServer,$PassServer,$Bd);
if($ConnetBd->connect_errno){
  die("Error al conectar la base de datos de WebCarr".$ConnetBd->connect_errno);
}
?>