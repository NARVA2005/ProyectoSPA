<?php
session_start();
require_once '../../config/mysql.php';
$mysql = new Mysql;
try {
    if (isset($_SESSION['id']) && isset($_SESSION['correo']) && isset($_SESSION['password']) &&
    isset($_SESSION['login'])){
  
    // Consulta a la base de datos
    $mysql-> conectar();
    $stmt = $mysql->consulta('SELECT  id,nombre FROM servicio');

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
    }  else{
        session_destroy();
        echo '{"data":"No deberías estar aquí, vete e inicia sesión correctamente...","response":"error"}';
        exit;
        }

  
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>