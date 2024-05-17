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
    session_destroy();
    echo '{"data":"Su estado es inactivo","response":"error"}';
    exit;
    }
    else{
        if (!isset($_POST['id']) || !isset($_POST['names']) || !isset($_POST['lastname']) || !isset($_POST['password'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        else if(empty($_POST['id']) || empty($_POST['names']) || empty($_POST['lastname'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        $id = $_POST['id'];
        $names = $_POST['names'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
    
        $consulta = $mysql -> consulta("UPDATE usuario set nombres = '$names',apellidos = '$lastname' where identificacion = $id");
        if(!empty($password)){
            $password = password_hash($password,PASSWORD_DEFAULT);
            $consulta = $mysql -> consulta("UPDATE usuario set nombres = '$names',apellidos = '$lastname',password = '$password' where identificacion = $id");
        }
            $_SESSION['nombres'] = $names;
            $_SESSION['apellidos'] = $lastname;
            echo '{"data":"¡Cambios realizados con éxito!","response":"success"}';
            exit;
    }
    }
    else{
        session_destroy();
        echo '{"data":"¿Cómo accediste aquí?, vete.","response":"error"}';
        exit;
        }
    }
    else{
        session_destroy();
        echo '{"data":"No deberías estar aquí, vete e inicia sesión correctamente...","response":"error"}';
        exit;
        }
}
catch(Exception){
    echo '{"data":"Hubo un error al actualizar los datos...","response":"error"}'; 
}