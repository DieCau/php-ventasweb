<?php 
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