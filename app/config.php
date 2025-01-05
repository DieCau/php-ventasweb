<?php 

// Set the default timezone
date_default_timezone_set('America/Argentina/Tucuman');

// Database connection variables
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

// Get the current date and time
$fechaHora = date('Y-m-d H:i:s');

$URL = "http://localhost/ventasweb";



// define('SERVIDOR', 'localhost');
// define('USUARIO', 'root');
// define('PASSWORD', 'root');
// define('DB', 'db_ventas');

// $servidor = "mysql:dbname=".DB.";host=".SERVIDOR;

// try {
//   $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
//   // echo "Conexión exitosa a la base de datos";
// } catch (PDOException $e) {
//   print_r($e);
//   echo "Error de conexion a la Base de Datos";
// }

// $URL = "http://localhost/ventasweb";

// date_default_timezone_set('America/Argentina/Tucuman');
// $fechaHora = date('Y-m-d H:i:s'); 