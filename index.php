<?php
include 'model/Link.php';

Link::autoload();

$pg = new Template('Index');
$pg->menu_lateral();


?>
<div class="col-md-8">
    <h3 class="text-center">
        ..:: Hola Mundo ::..
    </h3>
</div>