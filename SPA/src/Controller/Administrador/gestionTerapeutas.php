<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';


    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el terapeuta existe
        $consulta = $pdo->prepare("SELECT*FROM terapeutas;");

        $consulta->execute();

        $terapeutas = array();
    
            // El terapeuta existe, obtenemos sus datos
            while ($terapeuta = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $terapeutas[] = $terapeuta;
            }

            $datos = array(
                "status" => true,
                "terapeutas" => $terapeutas,
                "error" => null
            );
       
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "terapeuta" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }


echo json_encode($datos);
?>