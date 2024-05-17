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
 
        $consulta = $mysql -> consulta("SELECT * FROM usuario where identificacion <>".$_SESSION['identificacion']);
        $json = '[';
        while($fila = mysqli_fetch_array($consulta)){
        $json .= '{"id":'.$fila[0].',"names":"'.$fila[1].' '.$fila[2].'","status":"'.$fila['estado'].'"},';
        }

        $json = substr($json,0, strlen($json)-1);
        $json .= ']';
        echo $json;
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

// $tipo_id = "CC";
//         $id = $hoja->getCell("A"."$i");
//         $cod_ficha = $hoja->getCell("B"."$i");
//         $nombre_programa = $hoja->getCell("C"."$i");
//         $nombres = $hoja->getCell("D"."$i").' '.$hoja->getCell("E"."$i");
        

//         $consulta = $mysql->consulta("SELECT * FROM inscripcion INNER JOIN ficha ON inscripcion.numero_ficha = ficha.id where YEAR(ficha.fecha_registro) = '2024' and inscripcion.id_aspirante = $id and inscripcion.numero_ficha <> $cod_ficha");
//         if(mysqli_num_rows($consulta) != 0){
//             $consulta = $mysql->consulta("SELECT * FROM pendiente where identificacion = $id and numero_ficha = $cod_ficha"); 
//             if(mysqli_num_rows($consulta) == 0){
//                 $mysql->consulta("INSERT INTO pendiente VALUES(NULL,$id,'$tipo_id','SIN REGISTRAR','$nombres',$cod_ficha,'SIN REGISTRAR','$nombre_programa','Matriculado','Pertenece a otras fichas')");
//             }  
//             else{
//                 if($tipo_id != "SIN REGISTRAR"){
//                     $mysql->consulta("UPDATE pendiente set tipo_identificacion = '$tipo_id' where identificacion = $id and numero_ficha = $cod_ficha");
//                 }
//             }
//         }
//         else{
//             $consulta = $mysql->consulta("SELECT * FROM registro where identificacion = $id");
    
//             if(mysqli_num_rows($consulta)== 0){
//                 $mysql->consulta("INSERT INTO registro VALUES($id,'$tipo_id','$nombres','SIN REGISTRAR')");
//             }
    
//             $consulta = $mysql->consulta("SELECT * FROM ficha where id = $cod_ficha");
        
//             if(mysqli_num_rows($consulta)== 0){
//                 $mysql->consulta("INSERT INTO ficha VALUES($cod_ficha,'$nombre_programa','SIN REGISTRAR','$date')");
//             }
            
    
    
            
//             $mysql->consulta("INSERT INTO inscripcion VALUES(NULL,$cod_ficha,$id,'Matriculado')");
//         }