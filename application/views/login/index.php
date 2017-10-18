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

      <div class="container">
            <div class="row margenFila">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <div class="cajahoverr">
                  <?php
                  if( strlen($this->session->flashdata('login_result'))>0 ){
                    echo "
                    <div id='msg_server'class='alert alert-danger'> <center>".
                    $this->session->flashdata('login_result')." </center>
                    </div>
                    ";
                  }
                  ?>

                    <?php echo form_open('login/validar_login', array("id"=>"form_login")); ?>
                            <div class="loginhead">Ingrese sus datos de acceso</div>
                              <div class="loginbody">

                                      <div class="row margenFila">
                                        <div class="col-sm-12">
                                            <center><img src="<?php echo base_url('assets/img/login.jpg'); ?>" class="img-responsive imglogin" alt="LOGIN"></center>
                                          </div>
                                      </div>
                                      <br><br>
                                      <div class="row margenFila">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                               <input class="form-control inputLogin" type="text" name="username" placeholder="Usuario" autofocus>
                                          </div>
                                      </div>

                                      <div class="row margenFila">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                               <input class="form-control inputLogin" type="password" name="password" placeholder="Contraseña" required="">
                                          </div>
                                      </div>
                                      <br>
                                      <div class="row margenFila">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                              <button id="btn_login" type="submit" class="btn buttonLogin btn-block"> Ingresar </button>
                                          </div>
                                      </div>

                                </div>
                      <?php echo form_close(); ?>
                      </div>
                </div><!-- col-4 -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
            </div>  <!-- row -->
      </div>  <!-- container -->

      <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/jquery.validate.js'); ?>"></script>
      <script src="<?php echo base_url('assets/bootstrap337/js/bootstrap.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/application/login/login.js'); ?>"></script>
      <script>
        var base_url = live_url = "<?php echo base_url(); ?>";
      </script>
</body>
</html>
