<?php 
$pg = new Template('Método de Transporte');

$transporte = array();

$transporte['concepto'] = '<h4 class="text-center">Concepto</h4>
                            
                                <p>
                                    El problema del transporte consiste en la distribución de forma óptima (coste mínimo) de distintas cantidades de producto
                                    desde m lugares de origen que disponen de diferentes cantidades del mismo, en n destinos que demandan cada uno otras ciertas cantidades.
                                    <br><br>
                                    ai = cantidad disponible en el lugar i.<br>
                                    bj = demanda en el lugar j. <br>
                                    cij = coste unitario del transporte del origen i al lugar j. <br>
                                    xij = cantidad a enviar del origen i al lugar j.<br><br>
                                    
                                    Siendo (i = 1,2,...,m) y (j= 1,2,...,n), donde todas las cantidades han de ser números enteros.
                                    <br><br>
                                    El problema del transporte se expresa matemáticamente del siguiente modo;
                                </p>
                            <br>
                            <center> <img class="img-thumbnail" width="70%" src="http://localhost/app_diapositivas/assets/imgs/transporte_math.png" alt="math_transporte"> </center>
                            <br>
                                <p>
                                    Además se considera que la cantidad total que puede enviarse es igual a la cantidad demandada, esto es: 
                                </p>
                            <br>
                            <center> <img class="img-thumbnail" width="40%" src="http://localhost/app_diapositivas/assets/imgs/transporte2_math.png" alt="math_transporte"> </center>
                            <br>
                                <p>
                                En esta ultima condición no supone una limitación al problema general, pues en caso de no cumplirse, supondremos un destino ficticio con costes
                                de transporte nulos, segun que sobren o falten, respectivamente, materiales a enviar.
                                </p>
                            <br><br>
                            ';

$transporte['esquinaNoroeste'] = '<ul>
                                    <li>
                                    Comenzando por la esquina noroeste, (1,1), se asignan tantas unidades como sean posibles satisfaciendo las restricciones, que este caso es el menor 
                                    valor entre a1 y b1.
                                    </li>
                                    <li>
                                    Nos desplazamos a la casilla derecha si queda algún suministro, y si no, hacia la casilla inferior. Se le asigna igualmente la mayor cantidad posible
                                    de modo que la suma de las cantidades no exceda el suministro, y la suma de cantidades en la columna no rebase su demanda. En caso de que la datefmt_get_calendary el suministro
                                    estén agotados, se escribirá un cero (0).
                                    </li>
                                    <li>
                                    Y así sucesivamente hasta la esquina sureste.
                                    </li>
                                </ul>
                                <p>Las catidades colocadas serán siempre mayores o iguales a cero. Como se muestra a continuación.</p>
                                
                                <br>
                                <center>
                                    <img width="60%" class="thumbnail" src="http://localhost/app_diapositivas/assets/imgs/noroeste.png" alt="Esquina Noroeste"/>
                                </center>';

$transporte['vogel'] = '<p>
                        El método consiste en la realización de un algoritmo que consta de 3 pasos fundamentales y 1 más que asegura el ciclo hasta la culminación del método.
                        </p>
                        <br>
                        <h5 class="text-center">Pasos del método de Vogel</h5>
                        <ol>
                            <li>
                            Determinar para cada fila y columna una medida de penalización restando los dos costos menores en filas y columnas. 
                            </li>
                            <li>
                            Escoger la fila o columna con la mayor penalización, es decir que de la resta realizada en el "Paso 1" se debe escoger el número mayor. En caso de haber empate, se debe escoger arbitrariamente (a juicio personal). 
                            </li>
                            <li>
                            De la fila o columna de mayor penalización determinada en el paso anterior debemos de escoger la celda con el menor costo, y en esta asignar la mayor cantidad posible de unidades. Una vez se realiza este paso una oferta o demanda quedará satisfecha por ende se tachará la fila o columna, en caso de empate solo se tachará 1, la restante quedará con oferta o demanda igual a cero (0). 
                            </li>
                            <li>
                                <h5 class="text-center">Paso de ciclos y excepciones</h5>
                            - Si queda sin tachar exactamente una fila o columna con cero oferta o demanda, detenerse.<br>
                            - Si queda sin tachar una fila o columna con oferta o demanda positiva, determine las variables básicas en la fila o columna con el método de costos mínimos, detenerse.<br>
                            - Si todas las filas y columnas que no se tacharon tienen cero oferta y demanda, determine las variables básicas cero por el método del costo mínimo, detenerse.<br>
                            - Si no se presenta ninguno de los casos anteriores vuelva al paso 1 hasta que las ofertas y las demandas se hayan agotado. <br>
                            </li>
                        </ol>';

function view($metodo, $array)
{
    switch($metodo)
    {
        case 'concepto':
            echo $array['concepto'];
            
        break;

        case 'esquinanoroeste':
            echo $array['esquinaNoroeste'];
        break;

        case 'vogel':
            echo $array['vogel'];
        break;

        default:
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php
        break;

    }
}

include 'view/transporte/transporteView.phtml';
?>

