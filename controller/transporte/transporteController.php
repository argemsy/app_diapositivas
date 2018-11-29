<?php 
$pg = new Template('Método de Transporte');

$transporte = array();

$transporte['concepto'] = 'El problema del transporte consiste en la distribución de forma óptima (coste mínimo) de distintas cantidades de producto
                            desde m lugares de origen que disponen de diferentes cantidades del mismo, en n destinos que demandan cada uno otras ciertas cantidades.
                            <br><br>
                            ai = cantidad disponible en el lugar i.<br>
                            bj = demanda en el lugar j. <br>
                            cij = coste unitario del transporte del origen i al lugar j. <br>
                            xij = cantidad a enviar del origen i al lugar j.<br><br>
                            
                            Siendo (i = 1,2,...,m) y (j= 1,2,...,n), donde todas las cantidades han de ser números enteros.<br><br>
                            El problema del transporte se expresa matemáticamente del siguiente modo; ';


function view($metodo, $array)
{
    switch($metodo)
    {
        case 'concepto':
            echo $array['concepto'];
            ?>
            <br><br>
        <img class="img-thumbnail" src="<?php echo Link::ruta(); ?>assets/imgs/transporte_math.png" alt="math_transporte">
            <?php
        break;

        case 'ejemplo':
            echo "Ejemplos ...";
        break;

    }
}

include 'view/transporte/transporteView.phtml';
?>