<?php 

//crear array
$jugadores ['base'] = "Lucas";
$jugadores ['escolta'] = "Romeo";
$jugadores ['alero'] = "Homer";
$jugadores ['alapivot'] = "Raul";
$jugadores ['pivot'] = "Santiago";

foreach ($jugadores as $clave => $value) {
    echo $clave . " : " . $value . "<br>";
}

?>