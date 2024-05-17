<?php
session_start();
require_once '../controllers/mysql.php';
$mysql = new Mysql;
try{
    if (isset($_SESSION['identificacion']) && isset($_SESSION['correo']) && isset($_SESSION['password']) &&
    isset($_SESSION['login'])){
    $id = $_SESSION['identificacion'];
    $consulta = $mysql->consulta("SELECT COUNT(*),usuario.* FROM usuario where identificacion = $id");
    
    if (mysqli_num_rows($consulta) == 1){
    $consulta = mysqli_fetch_array($consulta);
    if($consulta['estado'] != "Activo"){
    $_SESSION['message'] = "Su estado actual es inactivo";
    header("Location: ../../");
    exit;
    }
    else{
        echo '{"data":"'.$consulta[1].",".$consulta[2].",".$consulta[3].",".$consulta[4].",".$consulta[5].'"}';
        exit;
    }
    }
    }
    else{
    session_destroy();
    header("Location: ../../");
    exit;
    }
}
catch(Exception){
    echo '{"data":"Algo inesperado ocurrió...","response":"error"}'; 
    exit; 
}