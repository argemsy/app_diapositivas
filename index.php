<?php
include 'model/Link.php';

Link::autoload();

Link::mvc($peticion = new Request());


?>
