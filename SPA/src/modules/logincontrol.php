<?php
session_start();
require_once '../controllers/mysql.php';
$mysql = new Mysql;
try{
//require_once '../controllers/mysql.php';
// $mysql = new Mysql;
// $password = password_hash('admin2671333',PASSWORD_DEFAULT);
// $mysql ->consulta("insert into usuario values(1,'admin','admin','admin@gmail.com','$password',DEFAULT)");


if (isset($_SESSION['identificacion']) && isset($_SESSION['correo']) && isset($_SESSION['password']) && isset($_SESSION['login'])){
    $id = $_SESSION['identificacion'];
    $consulta = $mysql->consulta("SELECT COUNT(*),estado FROM usuario where identificacion = $id");
    
    if (mysqli_num_rows($consulta) == 1){
        if(mysqli_fetch_array($consulta)[1] != "Activo"){
        $_SESSION['message'] = "Su estado actual es inactivo";
        header("Location: ../../");
        exit;
        }
    }
        header("Location: ../view/controlpanel.php");
    exit;
}

$idEmail = $_POST['idEmail'];
$password = $_POST['password'];
if(is_numeric($idEmail)){
$consulta = $mysql->consulta("SELECT * FROM usuario where identificacion = $idEmail");
}
else{
$consulta = $mysql->consulta("SELECT * FROM usuario where correo = '$idEmail'");
}

if (mysqli_num_rows($consulta) == 1){
    $consulta = mysqli_fetch_array($consulta);
    if(password_verify($password,$consulta[4])){
        $_SESSION['identificacion'] = $consulta[0];
        $_SESSION['nombres'] = $consulta[1];
        $_SESSION['apellidos'] = $consulta[2];
        $_SESSION['correo'] = $consulta[3];
        $_SESSION['password'] = $consulta[4];
        $_SESSION['rol'] = $consulta[5];
        $_SESSION['login'] = true;
        header("Location: ../view/controlpanel.php");
        exit;
    }
    else{
    $_SESSION['message'] = 'Contraseña incorrecta';
    header("Location: ../../");
    exit; 
    }
}
else{
    $_SESSION['message'] = 'Correo o identificación no existe';
    header("Location: ../../");
    exit; 
}
}
catch(Exception){
    session_destroy();
    session_start();
    $_SESSION['message'] = 'Algo inesperado ocurrió... Contacta con un administrador.';
    header("Location: ../../");
    exit; 
}


    
        