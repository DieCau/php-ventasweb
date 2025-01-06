<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Ventas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="login-page" style="--opacidad-negro: 0.2; background-image: linear-gradient(rgba(0, 0, 0, var(--opacidad-negro)), rgba(0, 0, 0, var(--opacidad-negro))), url('../public/images/back_main.jpeg'); background-size: cover;">
    <div class="login-box">
        <!-- /.login-logo -->

        <?php
        session_start();

        if (isset($_SESSION["mensaje"])) {
            $respuesta = $_SESSION["mensaje"]; ?>

            <script>
                    Swal.fire({
                        title: "Error",
                        text: "<?php echo $respuesta; ?>",
                        icon: "error",
                        position: "center",
                        showConfirmButton: false,
                        timer: 1500                    
                    });
            </script>

        <?php
            session_destroy();
        }
        ?>


        <br />
        <div class="card card-outline card-primary" style="background-color: transparent; border: 2px solid white; backdrop-filter: blur(10px);">
            <div class="card-header text-center">
                <a href="../public/templates/AdminLTE-3.2.0/index2.html" class="h1 text-white"><b>Sistema de </b>VENTAS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg text-white">Ingrese para Iniciar su Sesion</p>

                <form action="../app/controllers/login/loginController.php" method="post" autocomplete="off">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_user" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->



    <!-- jQuery -->
    <script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>