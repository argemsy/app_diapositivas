<?php

class Template 
{
    private $title;
    public function __construct($titulo = '')
    {
        $this->title = $titulo;
        ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>..:: Matemática | <?php echo $this->title; ?> ::..</title>
    <link rel="stylesheet" href="<?php echo Link::ruta(); ?>assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo Link::ruta(); ?>">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse fixed" id="navbarColor02">
      <?php if(!empty(Request::get_controller())){ ?>
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo Link::ruta(); ?>inicio">Programación Lineal</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo Link::ruta(); ?>metodos">Métodos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo Link::ruta(); ?>transporte">Método de Transporte</a>
      </li>
      
    </ul>
      <?php } ?>
  </div>
</nav><br>

<div class="container">
    <div class="row">
    

        <?php
    }

    public function menu_lateral()
    {
        ?>
<div class="col-md-4">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">
            Menú de opciones
        </a>
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in
        </a>
        <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus
        </a>
    </div>
</div>
        <?php
    }

    public function __destruct()
    {
        ?>
        
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
    </div>
    <footer class="section footer-classic context-success bg-info bg-image" >
        <br>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h5 class="text-center">
                        Matemática - Programación Lineal - Método del Transporte
                    </h5>
                
                </center>
            </div>
        </div>
        <br>
      </footer>
    <script src="<?php echo Link::ruta(); ?>assets/js/popper.js"></script>
    <script src="<?php echo Link::ruta(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo Link::ruta(); ?>assets/js/custom.js"></script>
    <!-- <script src="<?php echo Link::ruta(); ?>assets/js/fadeIn.js"></script> -->
</body>
</html>
        <?php 
    }
}


?>