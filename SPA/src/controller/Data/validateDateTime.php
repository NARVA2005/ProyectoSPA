<?php
session_start();
require_once '../../config/mysql.php';
$mysql = new Mysql;

try {
    // Obtener información de los terapeutas y sus horarios
    $mysql->conectar();
    $terapeutas = $mysql->consulta("SELECT t.id, t.nombres, t.apellidos, t.horaInicio, t.horaFinal, s.duracion, c.fecha
        FROM terapeuta t
        JOIN servicio s ON t.id = s.id_terapeuta
        LEFT JOIN cita c ON s.id = c.id_servicio");

    $terapeutaData = [];
    foreach ($terapeutas as $row) {
        $terapeutaId = $row['id'];
        if (!isset($terapeutaData[$terapeutaId])) {
            $terapeutaData[$terapeutaId] = [
                'nombres' => $row['nombres'],
                'apellidos' => $row['apellidos'],
                'horaInicio' => $row['horaInicio'],
                'horaFinal' => $row['horaFinal'],
                'duracion' => $row['duracion'],
                'citas' => []
            ];
        }
        if ($row['fecha']) {
            $terapeutaData[$terapeutaId]['citas'][] = $row['fecha'];
        }
    }

    // Calcular las horas no disponibles basado en la duración de los servicios y las citas
    $disabledDates = [];
    foreach ($terapeutaData as $terapeuta) {
        $duracion = $terapeuta['duracion'];
        // Convertir la duración a minutos
        list($duracionMinutos) = explode(' ', $duracion);
        foreach ($terapeuta['citas'] as $cita) {
            $inicio = new DateTime($cita);
            $fin = clone $inicio;
            $fin->modify("+$duracionMinutos minutes");

            // Añadir el rango de tiempo no disponible
            $intervalo = new DateInterval('PT1M');
            $periodo = new DatePeriod($inicio, $intervalo, $fin);
            foreach ($periodo as $fecha) {
                $fechaFormateada = $fecha->format('Y-m-d\TH:i');
                if (!in_array($fechaFormateada, $disabledDates)) {
                    $disabledDates[] = $fechaFormateada;
                }
            }
        }
    }

    // Eliminar fechas duplicadas
    $disabledDates = array_unique($disabledDates);

    // Simulación de obtención de datos desde la base de datos
    $availableDateTime = [          
        "minDate" => date('Y-m-d\TH:i'), // Fecha y hora actual como mínima
   /*      "maxDate" => date('Y-m-d\TH:i', strtotime('+1 week')), // Una semana a partir de la fecha y hora actual como máxima */
        "disabledDates" => $disabledDates, // Fechas y horas no disponibles
    ];

    // Devolver los datos como JSON
    echo json_encode($availableDateTime);

} catch (Exception $e) {
    session_destroy();
    session_start();
    echo '{"data":"Algo inesperado ocurrió... Contacta con un administrador","response":"error"}';
    exit;
}
?>
