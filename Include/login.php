<?php
session_start();
include "conect.php";
if (isset($_POST['BtnIngresar'])) {
    $Usuario = $ConnetBd->real_escape_string($_POST['Usuario']);
    $Password = $ConnetBd->real_escape_string(md5($_POST['Password']));
    // prueba unitarias
    // echo $Usuario, $Password;
    // generar la consulta para el ingreso de login 
    $consulta = "SELECT * FROM Usuario WHERE NomUser = '$usuario' and Password = '$Password'";
    if ($Rconsulta = $ConnetBd->query($consulta)) {
        while ($row = $Rconsulta->fetch_array()) {
            $UserOk = $row['NomUser'];
            $PasswordOk = $row['Password'];
        }
        $Rconsulta->close();
    }
    $ConnetBd->close();
    if (isset($Usuario) && isset($Password)) {
        if ($Usuario == $UserOk && $Password == $PasswordOk) {
            $_SESSION['login'] = TRUE;
            $_SESSION['Usuario'] = $usuario;
            header("location:App.php");
        } else {
            header("location:../index.php");
        }
    } else {
        header("location:../index.php");
    }
}
