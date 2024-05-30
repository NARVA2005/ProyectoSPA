<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';


    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el producto existe
        $consulta = $pdo->prepare("SELECT*FROM productos");

        $consulta->execute();

        $productos = array();
    
      
            while ($producto = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $productos[] = $producto;
            }

            $datos = array(
                "status" => true,
                "productos" => $productos,
                "error" => null
            );
       
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "producto" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }


echo json_encode($datos);
?>