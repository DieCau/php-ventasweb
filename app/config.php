<?php 

// Setear el horario por default de Zona
date_default_timezone_set('America/Argentina/Tucuman');

// Variables de Conexion a la BDD
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'db_ventas';


try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error de conexion a la Base de Datos: " . $e->getMessage());
}

// Obtener el dia y la hora correctamente!
$fechaHora = date('Y-m-d H:i:s');

$URL = "http://localhost/ventasweb";