<?php
session_start();

require_once '../../config/mysql.php';
$mysql = new Mysql;
try{
if (isset($_SESSION['id']) && isset($_SESSION['correo']) && isset($_SESSION['password']) && isset($_SESSION['login'])){
    $id = $_SESSION['id'];
    $mysql -> conectar();
    $stmt = $mysql->consulta("SELECT estado FROM usuario where id = ?",[$id]);
    $result = $stmt->fetch(PDO::FETCH_NUM);
    if ($stmt->rowCount() == 1){
        if($result[0] != 1){
        echo '{"data":"Su estado actual es inactivo","response":"error"}';
        exit;
        }
    }
    echo '{"data":"Ya hay una sesión iniciada","response":"success"}';
    exit;
}
if(!isset($_POST['user']) || !isset($_POST['password'])){
echo '{"data":"Datos no válidos","response":"error"}';
    exit;
}
$user = $_POST['user'];
$password = $_POST['password'];
$mysql -> conectar();
if(is_numeric($user)){
$stmt = $mysql->consulta("SELECT * FROM usuario where id = ?",[$user]);
}
else{
$stmt = $mysql->consulta("SELECT * FROM usuario where correo = ?",[$user]);
}

$result = $stmt->fetch(PDO::FETCH_NUM);
if ($stmt->rowCount() == 1){
    if(password_verify($password,$result[5])){
        if($result[9] != 1){
        echo '{"data":"Su estado actual es inactivo","response":"error"}';
        exit;
        }
        $_SESSION['id'] = $result[0];
        $_SESSION['nombres'] = $result[1];
        $_SESSION['apellidos'] = $result[2];
        $_SESSION['correo'] = $result[4];
        $_SESSION['password'] = $result[5];
        $_SESSION['rol'] = $result[7];
        $_SESSION['login'] = true;
        echo '{"data":"Datos validados correctamente","response":"success"}';
        exit;
    }
    else{
    echo '{"data":"Contraseña incorrecta","response":"error"}';
    exit; 
    }
}
else{
    echo '{"data":"Correo o identificación no existe","response":"error"}';
    exit; 
}
}
catch(Exception){
    session_destroy();
    session_start();
    echo '{"data":"Algo inesperado ocurrió... Contacta con un administrador","response":"error"}';
    exit; 
}


    
        