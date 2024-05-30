<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';

if ($datos !== null && isset($datos['identificacionCliente'])) {
    $id = $datos['identificacionCliente'];
    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el cliente existe
        $consulta = $pdo->prepare("SELECT rs.FechaRegistro, rs.DuracionRegistro, rs.Clientes_idClientes, t.nombreTerapeuta, s.nombreServicio 
        FROM registrosesiones rs 
        INNER JOIN servicios s ON rs.Servicios_idServicios = s.idServicios 
        INNER JOIN terapeutas t ON rs.Terapeutas_idTerapeutas = t.idTerapeutas 
        WHERE rs.Clientes_idClientes = ?
        ;
        ");
        $consulta->bindValue(1, $id);
        $consulta->execute();

        $clientes = array();
        if ($consulta->rowCount() > 0) {
            // El cliente existe, obtenemos sus datos
            while ($cliente = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $clientes[] = $cliente;
            }

            $datos = array(
                "status" => true,
                "clientes" => $clientes,
                "error" => null
            );
        } else {
            // El cliente no existe
            $datos = array(
                "status" => false,
                "cliente" => null,
                "error" => "El cliente con el ID proporcionado no existe"
            );
        }
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "cliente" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }
} else {
    // Error en la decodificación del JSON o falta de identificacionCliente
    $datos = array(
        "status" => false,
        "cliente" => null,
        "error" => "Error al decodificar el JSON o falta identificacionCliente"
    );
}

echo json_encode($datos);
?>