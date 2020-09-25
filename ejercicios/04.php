<?php
//declaro variables
$a = 0;
$b = 1;
$c = 0;

for ($i = 1; $i <= 10; $i++){
    //escribo a
    echo $a . "<br>";
    //en c, almaceno la suma de a y b
    $c = $a + $b;
    //a la variable a le asigno el valor de b para sumarle 1
    $a = $b;
    //a la variable b le asigno el valor de c
    $b = $c;
}
?>