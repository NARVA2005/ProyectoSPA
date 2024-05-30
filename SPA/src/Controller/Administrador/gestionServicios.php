<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';


    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el servicio existe
        $consulta = $pdo->prepare("SELECT * FROM servicios");

        $consulta->execute();

        $servicios = array();
    
            // El servicio existe, obtenemos sus datos
            while ($servicio = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $servicios[] = $servicio;
            }

            $datos = array(
                "status" => true,
                "servicios" => $servicios,
                "error" => null
            );
       
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "servicio" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }


echo json_encode($datos);
?>