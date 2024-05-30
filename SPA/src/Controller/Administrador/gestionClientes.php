<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';


    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el cliente existe
        $consulta = $pdo->prepare("SELECT * FROM clientes");

        $consulta->execute();

        $clientes = array();
    
            // El cliente existe, obtenemos sus datos
            while ($cliente = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $clientes[] = $cliente;
            }

            $datos = array(
                "status" => true,
                "clientes" => $clientes,
                "error" => null
            );
       
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "cliente" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }


echo json_encode($datos);
?>