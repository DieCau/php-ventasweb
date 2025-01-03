<?php 
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', 'root');
define('DB', 'db_ventas');

$servidor = "mysql:dbname=".DB.";host=".SERVIDOR;

try {
  $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
  // echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
  print_r($e);
  echo "Error de conexion a la Base de Datos";
}

$URL = "http://localhost/ventasweb";