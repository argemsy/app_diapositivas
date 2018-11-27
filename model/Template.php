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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo Link::ruta(); ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse fixed" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
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
    </div>
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