<?php
include("../app/config.php");
include("../layout/sesion.php");
include("../layout/parte1.php");
include("../app/controllers/usuarios/showUsuarioController.php");

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Usuario Registrado</h1>
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
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Visualizacion de Datos</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body"  style="display: block;">
              <div class="row">
                <div class="col-md-12">
                  
                <form action="../app/controllers/usuarios/crearUsuarioController.php" method="post">
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombres" value="<?php echo $nombres; ?>" class=" form-control" disabled required>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" disabled required>
                    </div>
                    
                    <hr>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left mr-2"></i>Volver atrás</a>
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

<?php include("../layout/parte2.php");?>