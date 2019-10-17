<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Educared</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./css/bootstrap-grid.css">
  <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/bootstrap-reboot.css">
  <link rel="stylesheet" href="./css/bootstrap-reboot.min.css"> -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <!-- <link rel="stylesheet" href="./css/estilos.css"> -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>
  <div class="arriba">
    <div class="container">
        <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 imgBanner1">
                <img class=" col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12" src="<?php bloginfo('template_url'); ?>/images/logoEducared.png" alt="" width="100%">
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 imgBanner2">
                <img class=" col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12" src="<?php bloginfo('template_url'); ?>/images/header2.png" alt="" width="100%">
            </div> 
          </div>
        </div>
    </div>
  </div>
  
      
 
  
  
  <!-- <div id="navbar">
      <nav class="dropdownmenu">
      <ul>
            <li><a href="#"><i class="icon-home"></i></a></li>
            <li><a href="#">Cursos y <br> Capacitaciones</a>
              <ul id="submenu">
                  <li><a href="#">Cursos Virtuales</a></li>
                  <li><a href="#">Capacitaciones <br> Presenciales</a></li>
                  
                </ul>
            </li>
            <li><a href="#">Comunidades <br> Virtuales</a>
              <ul id="submenu">
                <li><a href="#">Desafios de la Educación</a></li>
                <li><a href="#">Educación Mediática</a></li>
                <li><a href="#">Uso Responsable de las TIC</a></li>
                <li><a href="#">Con las TIC en el Aula</a></li>
                <li><a href="#">Educación y Discapacidad</a></li>
                <li><a href="#">Educación Inicial</a></li>
                <li><a href="#">Filosofía en la era Digital</a></li>
              </ul>
            </li>
            <li><a href="#">Recursos <br> Educativos</a>
              <ul id="submenu">
                  <li><a href="#">Recursos Educared</a></li>
                  <li><a href="#">Villaplanet</a></li>
                  <li><a href="#">Calendario Cívico</a></li>
                  <li><a href="#">Biblioteca Virtual</a></li>
                  <li><a href="#">Oráculo Matemágico</a></li>
                  <li><a href="#">Publicaciones</a></li>
                  <li><a href="#">Webs Recomendadas</a></li>
                  <li><a href="#">Programación Curricular</a></li>
                </ul>
            </li>
            <li><a href="#">Actualidad <br> Educativa</a>
              <ul id="submenu">
                  <li><a href="#">Item1</a></li>
                  <li><a href="#">Item2</a></li>
                  <li><a href="#">Item3</a></li>
                </ul>
            </li>
            <li><a href="#">Prácticas con TIC</a>
              <ul id="submenu">
                  <li><a href="#">¿Qué es una Buena Práctica?</a></li>
                  <li><a href="#">Banco de Buenas Prácticas</a></li>
                  <li><a href="#">Sistema de Mejora de Calidad Educativa</a></li>
                </ul>
            </li>
            <li><a href="#">Educación Digital</a>
              <ul id="submenu">
                  <li><a href="#">Aula Digital</a></li>
                  <li><a href="#">Gamificación</a></li>
                </ul>
            </li>
          </ul>
      </nav> 
  </div> -->
  <?php wp_nav_menu(array(
      'theme_location' => 'principal',
      'container' => 'div',
      'container_class' => 'main-menu',
      'container_id' => 'navbar',
      'items_wrap' => '<ul class="dropdownmenu">%3$s</ul>',
      'menu_class' => 'dropdownmenu'
  )); ?>
  
  
    <!-- Parte de aRRIBA -->
    
      
