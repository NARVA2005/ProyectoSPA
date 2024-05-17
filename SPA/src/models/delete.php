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
    else{
        $info = json_decode($_POST['dataInfo'],true);
        $index = 0;
        $mysql ->conectar();
        $mysql->consultaAbierta("START TRANSACTION");
        $index = 0;

        foreach ($info['dataInfo'] as $valor){
            $idDelete = $info['dataInfo'][$index];
            $fichaDelete = $info['fichas'][$index];
            $query = $mysql->consultaAbierta("DELETE FROM inscripcion where id_aspirante = $idDelete and numero_ficha = $fichaDelete");
            if(mysqli_affected_rows($mysql->connection) > 1){
                $mysql->consultaAbierta("ROLLBACK");
                $mysql->desconectar();
                echo '{"data":"Algo falló en la operación... inténtalo de nuevo","response":"error"}';
                exit;
            }
           $index++;
        }
        $mysql->consultaAbierta("COMMIT");
        $mysql->desconectar();
        echo '{"data":"Operación exitosa","response":"success"}';
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