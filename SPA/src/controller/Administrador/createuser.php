<?php
session_start();
require_once '../../config/mysql.php';
$mysql = new Mysql;
try{
if (isset($_SESSION['id']) && isset($_SESSION['correo']) && isset($_SESSION['password']) &&
    isset($_SESSION['login'])){
    $id = $_SESSION['id'];
    $mysql->conectar();
    $stmt = $mysql->consulta("SELECT estado,id_rol FROM usuario where id = ?",[$id]);
    $result = $stmt->fetch(PDO::FETCH_NUM);
    if (count($result) == 2){
    if($result[0] != 1){
    session_destroy();
    echo '{"data":"Su estado es inactivo","response":"error"}';
    exit;
    }
    if($result[1] != 1){
    echo '{"data":"Debes ser administrador para realizar esta acción","response":"error"}';
    exit;
    }
    else{
        if (!isset($_POST['id']) || !isset($_POST['names']) || !isset($_POST['lastname']) || !isset($_POST['phone']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['schedule']) || !isset($_POST['rol'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        else if(empty($_POST['id']) || empty($_POST['names']) || empty($_POST['lastname']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['schedule']) || empty($_POST['rol'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        $id = preg_replace('/\s+/','',$_POST['id']);
        $names = mb_strtoupper(trim($_POST['names']),'UTF-8');
        $lastname = mb_strtoupper(trim($_POST['lastname']),'UTF-8');
        $phone = preg_replace('/\s+/','',$_POST['phone']);
        $email = strtolower(preg_replace('/\s+/','',$_POST['email']));
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $schedule = strtoupper(trim($_POST['schedule']));
        $rol = trim($_POST['rol']);
        
    

        $mysql-> conectar();
        $stmt = $mysql -> consulta("SELECT COUNT(id) FROM usuario where id = ?",[$id]);
        $result = $stmt->fetch(PDO::FETCH_NUM);
        if ($result[0] == 1){
            echo '{"data":"Este usuario ya existe","response":"error"}';
            exit;
        }
        $stmt = $mysql -> consulta("SELECT COUNT(correo) FROM usuario where correo = ?",[$email]);
        $result = $stmt->fetch(PDO::FETCH_NUM);
        if ($result[0] == 1){
            echo '{"data":"El correo ya existe","response":"error"}';
            exit;
        }
        $mysql -> consulta("INSERT INTO usuario VALUES(?,?,?,?,?,?,?,?,?)",[$id,$names,$lastname,$phone,$email,$password,$schedule,$rol,1]);
        echo '{"data":"Usuario creado con éxito","response":"success"}';
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
catch(Exception $e){
    echo '{"data":"Algo inesperado ocurrió...","response":"error"}'; 
    exit;
    
 
}