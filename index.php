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
    <title>Inicio de Sistema | Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="Usuario" id="User" placeholder="Usuario"><br>
        <input type="password" name="Password" id="Pass" placeholder="Password"><br>
        <input type="submit" value="Ingresar" name="BtnIngresar">
    </form>
</body>
</html>