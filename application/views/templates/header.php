<?php if (!isset($titulo)) $titulo = ''; ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Codeigniter </title>

  <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">

  <link href="<?php echo base_url('assets/bootstrap337/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  <link href="<?php echo base_url('assets/css/estilos.css'); ?>" rel="stylesheet" media="screen">
</head>

<body>

    <!-- <header> -->

        <nav class="navbar navbar-inverse" style="border-radius:0px !important; padding-right:0px !important; margin-right:0px !important;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Sistema web de negocio</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Ayuda <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Usar el sistema</a></li>
                    <li><a href="#">Versión 1.0 </a></li>
                  </ul>
                </li>

              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi perfil </a></li>
                <li>
                  <a href="<?php echo site_url('Login/cerrar_sesion'); ?>"> <span class="glyphicon glyphicon-log-in"></span> Salir </a>
                </li>


              </ul>
            </div>
          </div>
        </nav>

    <!-- </header> -->
