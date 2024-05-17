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
        if (!isset($_POST['id'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        else if(empty($_POST['id'])){
            echo '{"data":"Datos no válidos","response":"error"}';
            exit;
        }
        $id = $_POST['id'];

        $consulta = $mysql -> consulta("SELECT estado FROM usuario where identificacion = $id");
        if (mysqli_num_rows($consulta) == 0){
            echo '{"data":"Este usuario no existe","response":"error"}';
            exit;
        }
        else{
            if(mysqli_fetch_array(($consulta))['estado'] == "Activo"){
                $consulta = $mysql -> consulta("UPDATE usuario set estado = 'Inactivo' where identificacion = $id");
                echo '{"data":"Estado cambiado exitosamente a Inactivo","response":"success"}';
                exit;
            }
            else{
                $password = password_hash("sena2024",PASSWORD_DEFAULT);
                $consulta = $mysql -> consulta("UPDATE usuario set estado = 'Activo', password='$password' where identificacion = $id");
                echo '{"data":"Estado cambiado exitosamente a Activo","response":"success"}';
                exit;
            }
        }
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