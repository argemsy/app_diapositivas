<?php 
$pg = new Template('Programación Lineal - Concepto');

$pl = array();
$pl['concepto'] = '<p class="text-justify">La programación lineal pretende hacer mínima o máxima una función que esta sujeta a ciertas restricciones. Estos problemas se caracterizan por el gran numero de soluciones que cumplen las condiciones del problema,pero lo que se desea es hallar la mejor solución de todas ellas, es decir la solución óptima.</p>
                    <p class="text-justify">En 1947 George Dangzit formula el problema general de programación lineal y desarrolla el método de simplex para su solución, desde entonces se aplica en múltiples campos; economía, agricultura, nutrición, administración, producción, etc. 
                    </p>
                    <p class="text-justify"><i>Un problema de optimización consiste en maximizar o minimizar una determinada función llamada función objetivo, que depende de una serie de variables. Estas variables suelen estar relacionadas entre si por una o varias restricciones.</i></p>';


include('view/inicio/inicioView.phtml');
?>