<?php
class Mysql {
private $user = "root";
private $password  = "";
private $host = "localhost";
private $database = "por cambiar";

public $connection;
private $queryResult;

public function conectar(){
    $this -> connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
}

public function desconectar(){
    mysqli_close($this->connection);
}

public function consulta($query){
    $this -> connection = mysqli_connect($this->host,$this->user,$this->password,$this->database);
    mysqli_query($this->connection, "SET lc_time_names = 'es_Es'");
        // Añade el uso de caracteres especiales como tildes con el formato UTF-8
    mysqli_query($this->connection, "SET NAMES 'utf8'");

    $this->queryResult = mysqli_query($this->connection, $query);
    mysqli_close($this->connection);
    return $this->queryResult;
 
}

public function consultaAbierta($query){
    mysqli_query($this->connection, "SET lc_time_names = 'es_Es'");
        // Añade el uso de caracteres especiales como tildes con el formato UTF-8
    mysqli_query($this->connection, "SET NAMES 'utf8'");

    $this->queryResult = mysqli_query($this->connection, $query);
    return $this->queryResult;
 
}
}