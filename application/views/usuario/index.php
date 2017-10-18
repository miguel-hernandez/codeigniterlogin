<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php echo "Login | ". $titulo; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">

  <link href="<?php echo base_url('assets/bootstrap337/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/estilos.css'); ?>" rel="stylesheet" media="screen">

</head>
<body>

    <nav class="navbar navbar-default" role="navigation" style="background-color:#42C8C6 !important; color: white !important; font-weight:bold;">
      <!-- El logotipo y el icono que despliega el menú se agrupan
           para mostrarlos mejor en los dispositivos móviles -->
      <div class="navbar-header" style=" color: white !important; ">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
          <span class="sr-only">Desplegar navegación</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: white !important;"><?php echo $esta_logueado; ?></a>
      </div>

      <!-- Agrupar los enlaces de navegación, los formularios y cualquier
           otro elemento que se pueda ocultar al minimizar la barra -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right" style="color: white !important;">
            <li style="color: white !important; margin-top:5px; margin-right:5px;">
              <?php echo form_open('login/cerrar_sesion'); ?>
              <button id="" type="submit" class="btn btn-default btn-sm btn-block">X</button>
              <?php echo form_close(); ?>
            </li>
        </ul>
      </div>
    </nav>



    <div class="row">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">

        <div class="div_search">
          <div class="row margenFila">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
              dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>

      </div><!-- col-10 -->
      <div class="col-sm-1"></div>
    </div>  <!-- row principal -->


    <div id="modal_notification" class="modal fade" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header modalhead">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <span>Aviso</span>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <center><label id="notification_content"></label></center>
                </div>
              </div><!-- row -->
          </div>
        </div>
      </div>
    </div><!--- modal_notification -->


    <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/jquery.validate.js'); ?>"></script>
    <script src="<?php echo base_url('assets/application/login/login.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap337/js/bootstrap.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets/application/usuario/usuario.js'); ?>"></script>

    <script src="<?php echo base_url('assets/application/notification.js'); ?>"></script>


    <script>
      $(document).ready(function () {
         base_url = live_url = "<?php echo base_url(); ?>";
         base_url = base_url+"index.php/";

         $("#modal_notification").modal("show");
      });
    </script>

</body>
</html>
