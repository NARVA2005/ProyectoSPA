<?php
session_start();
require '../../vendor/autoload.php';
require_once '../controllers/mysql.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
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
    if (!isset($_SESSION['rol'])){
        session_destroy();
        echo '{"data":"Rol no está definido","response":"error"}';
        exit;
        }
    if (empty($_SESSION['rol'])){
        session_destroy();
        echo '{"data":"Rol no está definido","response":"error"}';
        exit;
        }
    if ($_SESSION['rol'] != 1){
            session_destroy();
            echo '{"data":"Debes ser administrador para realizar esta acción","response":"error"}';
            exit;
            }
    else{
        if (!isset($_POST['id']) || !isset($_POST['names']) || !isset($_POST['lastname']) || !isset($_POST['email']) || !isset($_POST['password'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        else if(empty($_POST['id']) || empty($_POST['names']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        $id = $_POST['id'];
        $names = $_POST['names'];
        $email = $_POST['email'];
        $lastname = $_POST['lastname'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    

        $consulta = $mysql -> consulta("SELECT * FROM usuario where identificacion = $id");
        if (mysqli_num_rows($consulta) == 1){
            echo '{"data":"Este usuario ya existe","response":"error"}';
            exit;
        }
        $consulta = $mysql -> consulta("SELECT * FROM usuario where correo = '$email'");
        if (mysqli_num_rows($consulta) == 1){
            echo '{"data":"El correo ya existe","response":"error"}';
            exit;
        }
        $consulta = $mysql -> consulta("INSERT INTO usuario values($id,'$names','$lastname','$email','$password',2,DEFAULT)");
        echo '{"data":"¡Usuario creado con éxito!","response":"success"}';
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
    $mysql->consultaAbierta("ROLLBACK");
    $mysql->desconectar();
    echo '{"data":"Algo inesperado ocurrió...","response":"error"}'; 
    exit;
    
 
}