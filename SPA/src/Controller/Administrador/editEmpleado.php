<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');
// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';

$idEmpleado = isset($datos['idEmpleado']) ? $datos['idEmpleado'] : '';
$nuevoNombre = isset($datos['nuevoNombre']) ? $datos['nuevoNombre'] : '';
$nuevoCorreo = isset($datos['nuevoCorreo']) ? $datos['nuevoCorreo'] : '';
    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    try {
        // Verificar si el empleado existe
        $consulta = $pdo->prepare("SELECT e.*, r.DescripcionRol AS NombreRol
        FROM empleados e
        JOIN roles r ON e.Roles_idRoles = r.idRoles;");

        $consulta->execute();

        $empleados = array();
    
            // El empleado existe, obtenemos sus datos
            while ($empleado = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $empleados[] = $empleado;
            }

            $datos = array(
                "status" => true,
                "empleados" => $empleados,
                "error" => null
            );
       
    } catch (PDOException $e) {
        // Error de base de datos
        $datos = array(
            "status" => false,
            "empleado" => null,
            "error" => "Error de base de datos: " . $e->getMessage()
        );
    }


echo json_encode($datos);
?>