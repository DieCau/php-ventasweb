<?php
include("../app/config.php");
include("../layout/sesion.php");
include("../layout/parte1.php");
include("../app/controllers/usuarios/listaUsuariosController.php");

if (isset($_SESSION["mensaje"])) {
  $respuesta = $_SESSION["mensaje"]; ?>

  <script>
    Swal.fire({
      position: "center",
      icon: "success",
      title: "<?php echo $respuesta; ?>",
      showConfirmButton: false,
      timer: 1500
    });
  </script>';

<?php
  unset($_SESSION["mensaje"]);
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de Usuario</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Usuarios Registrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">
              <!-- Table -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th>Nº</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($usuarios_datos as $usuarios_dato) { 
                    $id_usuario = $usuarios_dato['id_usuario'];
                    ?>
                    <tr class="text-center">
                      <td><?php echo $contador = $contador + 1; ?></td>
                      <td><?php echo $usuarios_dato['nombres']; ?></td>
                      <td><?php echo $usuarios_dato['email']; ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="show.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-info mr-2"><i class="fas fa-eye mr-2"></i>Ver</a>
                          <a href="update.php?id=<?php echo $id_usuario; ?>" type="button" class="btn btn-success mr-2"><i class="fas fa-edit mr-2"></i>Editar</a>
                          <a href="" type="button" class="btn btn-danger"><i class="fas fa-trash mr-2"></i>Eliminar</a>

                        </div>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>

                <tfoot>
                  <tr class="text-center">
                    <th>Nº</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Acciones</th>
                  </tr>
                </tfoot>
              </table>
              <!-- /. table -->

            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>

    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("../layout/parte2.php"); ?>


<script>
  $(function() {
    $("#example1").DataTable({

      /* cambio de idiomas de datatable */
      "pageLength": 10,
      language: {
        "emptyTable": "No hay información Disponible",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
        "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
        "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Usuarios",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      /* fin de idiomas */

      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,

      /* Ajuste de botones */
      buttons: [{
          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',
          buttons: [{
            text: 'Copiar',
            extend: 'copy'
          }, {
            extend: 'pdf',
          }, {
            extend: 'csv',
          }, {
            extend: 'excel',
          }, {
            text: 'Imprimir',
            extend: 'print'
          }]
        },
        {
          extend: 'colvis',
          text: 'Visor de Columnas'
        }
      ],
      /*Fin de ajuste de botones*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>