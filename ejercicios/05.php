<?php
$numero = 10;
$contador = 2;
$primo = true;

while(($primo) && ($contador!=$numero)) {
if ($numero % $contador == 0){
    $primo = false;
    $contador++;
    for ($i = 1; $i <= $numero; $i++){
        if ($numero % $i == 0){
            echo $i . "<br>";
        }
    }

}
}


?>
