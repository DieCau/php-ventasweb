<?php
include("../app/config.php");
include("../layout/sesion.php");
include("../layout/parte1.php");
include("../app/controllers/usuarios/updateUsuarioController.php");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Actualizar Datos Usuario</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Visualizacion de Datos</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style="display: block;">
              <div class="row">
                <div class="col-md-12">

                  <form action="../app/controllers/usuarios/update.php" method="post">
                    <input type="text" name="id_usuario" value="<?php echo $id_usuario_get; ?>" hidden>
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password_user" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">Repetir Password</label>
                      <input type="password" name="password_repeat" class="form-control" required>
                    </div>
                    <hr>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                  </form>

                </div>
              </div>
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

<?php include("../layout/mensajes.php"); ?>
<?php include("../layout/parte2.php"); ?>