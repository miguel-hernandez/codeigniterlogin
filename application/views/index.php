<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// if (!isset($titulo)) $titulo = '';
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> <?php echo $titulo; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">


  <style>
  .modalhead{
    background-color:#EA77AD;
    color: #FFFFFF !important;
    font-size: 18px;
    text-align:center;
    padding: 4px;
    font-weight: bold;
  }

  </style>

  <link href="<?php echo base_url('assets/bootstrap337/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/estilos.css'); ?>" rel="stylesheet" media="screen">
  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap337/js/bootstrap.min.js'); ?>"></script>
  <script>
    var base_url = live_url = "<?php echo base_url(); ?>";
    console.info("base_url: "+base_url);
  </script>
</head>
<body>






      <div class="container">

              <div class="row margenFila"> <!--INICIA  FILA-->
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <?php echo form_open('login/validar_login', array("id"=>"form_login")); ?>
                              <div class="loginhead">Ingrese sus datos de acceso</div>
                                <div class="loginbody">
                                  <div class="row margenFila">
                                    <div class="col-sm-12">
                                        <img src="<?php echo base_url('assets/img/logo-sonora-color.png'); ?>" class="img-responsive imglogin" alt="SEP">
                                      </div>
                                  </div>
                                  <div class="row margenFila">
                                    <form method="post">
                                        <div class="row margenFila">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <input class="form-control inputLogin" type="text" name="login" placeholder="Usuario" required="" autofocus>
                                            </div>
                                        </div>

                                        <div class="row margenFila">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                 <input class="form-control inputLogin" type="password" name="pass" placeholder="Contraseña" required="">
                                            </div>
                                        </div>

                                        <div class="row margenFila">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <button type="submit" class="btn buttonLogin btn-block" name="btn_login">Ingresar</button>
                                            </div>
                                        </div>
                                    </form>                                    
                                  </div>


                                  </div>
                        <?php echo form_close(); ?>
                  </div><!-- col-4 -->

                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
              </div>  <!--TERMINA  FILA-->
      </div>  <!--TERMINA  CONTAINER-->

</body>
</html>
