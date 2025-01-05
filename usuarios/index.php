<?php
include("../app/config.php");
include("../layout/sesion.php");
include("../layout/parte1.php"); 
include("../app/controllers/usuarios/listaUsuariosController.php"); ?>

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
        <div class="col-md-8">
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
            <div class="card-body"  style="display: block;">
              <table class="table table-bordered table-hover table-striped table-sm">
                <tr class="text-center">
                  <th>Nº</th>
                  <th>Nombres</th>
                  <th>Email</th>
                </tr>
                <tbody>
                  <?php ;
                  $contador = 0;
                    foreach ($usuarios_datos as $usuarios_dato) { ?>
                      <tr class="text-center">
                      <td><?php echo $contador = $contador + 1; ?></td>
                      <td><?php echo $usuarios_dato['nombres']; ?></td>
                      <td><?php echo $usuarios_dato['email']; ?></td>
                    </tr>                     
                    <?php 
                    }
                  ?>
                </tbody>
              </table>
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