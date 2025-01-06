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


if(isset($_SESSION["mensaje"])) {
  $respuesta = $_SESSION["mensaje"];?>

  <script>
  Swal.fire({
      position: "center",
      icon: "error",
      title: "<?php echo $respuesta; ?>",
      showConfirmButton: false,
      timer: 1500
  });
  </script>';

<?php 
  unset($_SESSION["mensaje"]);
}