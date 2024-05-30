<?php
// Lee el cuerpo de la solicitud
$json = file_get_contents('php://input');

// Decodifica el JSON a un array asociativo
$datos = json_decode($json, true);

include '../../models/conexion.php';
if ($datos != null) {
   
    $correo = $datos['Correo'];
    $contra = $datos['Contra'];


    $conexion = new Conexion();
    $pdo = $conexion->conectar();
    $arregloDeObjetos = array();
    
    
    try {
       
        $consulta = $pdo->prepare("SELECT * FROM empleados WHERE CorreoEmpleado =? ");
        $consulta->bindValue(1, $correo);
        $consulta->execute();
        $empleadoExisteCorreo = $consulta->rowCount(); // aca guardo en una variable el total de filas que devolvio la consulta
    
        //  VOY HACER UNA DESICION DE QUE SI DEVULEVE UNA FILA ES PORQUE EL CORREO EXISTE EN LA BASE DE DATOS ENTONCES YA TOCARIA COMPARAR EL PASSWORD
    if($empleadoExisteCorreo > 0)
    {
        $consulta = $pdo->prepare("SELECT * FROM empleados WHERE CorreoEmpleado =? AND password = ?");
        $consulta->bindValue(1, $correo);
        $consulta->bindValue(2, $contra);
        $consulta->execute();
        $empleadoExiste = $consulta->rowCount();
        if($empleadoExiste > 0)
        {
            // aca lo mando a la formulario principal de empleados
            $datos = array(
                "status" => true,
                "formulario" => "empleados",
                "error"=>null
            );
    
        }
        else{
            // EL CORREO CONSIDE EN LA BASE DE DATOS EMPLEADOS PERO LA CONTASEÑA NO CONCIDE 
            $datos = array(
                "status" => false,
                "formulario" => null,
                "error"=>"Contraseña Incorrecta¡"
            );
        }
    }
    else{
    
        $consulta = $pdo->prepare("SELECT * FROM terapeutas WHERE CorreoTerapeuta=?");
        $consulta->bindValue(1, $correo);
        $consulta->execute();
        $terapeutasExisteCorreo = $consulta->rowCount();  // aca guardo en una variable el total de filas que devolvio la consulta
        if($terapeutasExisteCorreo > 0)
        {
            $consulta = $pdo->prepare("SELECT * FROM terapeutas WHERE CorreoTerapeuta=? AND password =?");
            $consulta->bindValue(1, $correo);
            $consulta->bindValue(2, $contra);
            $consulta->execute();
            $terapeutasExiste = $consulta->rowCount();  // aca guardo en una variable el total de filas que devolvio la consulta
        if($terapeutasExiste > 0)
        {
            // lo mando al formulario principal del terapeuta
            $datos = array(
                "status" => true,
                "formulario" => "terapeutas",
                "error"=>null
            );
    
        }
        else{
             // EL CORREO CONSIDE EN LA BASE DE DATOS EMPLEADOS PERO LA CONTASEÑA NO CONCIDE 
             $datos = array(
                "status" => false,
                "formulario" => null,
                "error"=>"Contraseña Incorrecta¡"
            );
    
        }
        }
        else{
            // aca ya se han verificado las dos tablas y si no esta el correo
            // en la base de datos es porque no esta registrado

              $datos = array(
                "status" => false,
                "formulario" => null,
                "error"=>"Usuario No Registrado"
            );

        }
    
    }

    
    } catch (PDOException $e) {
        $datos = array(
            "status" => false,
            "formulario" => null,
            "error"=>"Error ".$e->getMessage()
        );
        
    }
    


}
else{
 // Maneja el error si la decodificación falla

   $datos = array(
    "status" => false,
    "formulario" => null,
    "error"=>"Error al decodificar el JSON"
);
}


echo json_encode($datos);

?>