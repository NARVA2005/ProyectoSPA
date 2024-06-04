<?php

session_start();

date_default_timezone_set("America/Bogota");

$date = date("Y/m/d");

$fecha = new DateTime($date);

$fecha->add(new DateInterval('P1D'));

$fecha = $fecha->format("Y/m/d");



require_once '../../config/mysql.php';

$mysql = new Mysql;


try{
    if (isset($_SESSION['id']) && isset($_SESSION['correo']) && isset($_SESSION['password']) &&
        isset($_SESSION['login'])){
        $id = $_SESSION['id'];
        $mysql->conectar();
        $stmt = $mysql->consulta("SELECT estado FROM usuario where id = ?",[$id]);
        $result = $stmt->fetch(PDO::FETCH_NUM);
        
        if (count($result) == 1){
        if($result[0] != 1){
        session_destroy();
        echo '{"data":"Su estado es inactivo","response":"error"}';
        exit;
        }
        else{
            $mysql->conectar();
        if(isset($_GET["query"])){
        $query = $_GET["query"];   
        if($query == 1){
        $stmt = $mysql->consulta("SELECT servicio.nombre as x, COUNT(id_servicio) as y FROM cita  INNER JOIN servicio ON id_servicio = servicio.id GROUP BY id_servicio  ORDER BY y DESC",[]); 
        echo json_encode($stmt -> fetchAll(PDO::FETCH_ASSOC));
        }
        else if($query == 2){
        $stmt = $mysql->consulta("SELECT servicio.nombre as x, SUM(servicio.precio) as y FROM cita  INNER JOIN servicio ON id_servicio = servicio.id GROUP BY id_servicio  ORDER BY y DESC",[]); 
        echo json_encode($stmt -> fetchAll(PDO::FETCH_ASSOC));
        }
        else if($query == 3){
        $stmt = $mysql->consulta("SELECT CASE WHEN estado = 1 THEN 'Activo' ELSE 'Inactivo' END as x, COUNT(estado) as y FROM registro GROUP BY x ORDER BY y DESC",[]); 
        echo json_encode($stmt -> fetchAll(PDO::FETCH_ASSOC));
        }
        else{
        echo "[]";
        }
        }else{
        echo "[]";   
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

    echo '{"data":"Algo inesperado ocurrió...","response":"error"}'.$e; 

    exit;



}