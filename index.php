<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios</title>
</head>
<body>
  <h1>Ejemplos y ejercicios php</h1>
  <?php
    $ejercicio=0;
    $ejemplo=0;
  ?>
  
  <h2>Ejemplos</h2>
  <ol>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
      Hola mundo
    </li>

    <li>
      <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
      Imprimir la configuración del servidor y de php.
    </li>
    <li>
      <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
      Ejemolos de uso de echo y print.
    </li>

      <ul>
        <li>
        <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
        Imprimir una ficha con tus datos personales guardados en variables (nombre, apellidos, edad, teléfono, email, ...). Hazlo usando una tabla html y cambiando de modo:
        </li>
          <ol>
            <li>Con print y con echo</li>
            <li>Con concatenando, usando dobles comillas y simples, ....</li>
          </ol>
      </ul>

    <li>
      <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
      Uso de constantes y bucles para construír una tabla 10x10.
    </li>
      <ul>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Imprimir la tabla de multiplicar del 8. Usar constante para que fácilmente podamos adaptarla a otros números.
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Imprimir los números divisibles por 3 desde el 1 hasta el 10
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Imprimir los primeros 10 números de la sucesión de fibonacci. La sucesión comienza con los números 0 y 1; 2​ a partir de estos, «cada término es la suma de los dos anteriores»
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Dado un número por constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si no los hay decir que el número es primo.
        </li>
      </ul>

    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
    Uso de arrays ordenadas. Creación en una sola sentencia.
    </li>
      <ul>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Construír un array con el quinteto inicial de un equipo de basket. Construyelo usando "array()" y usando "[]". Imprimir dicho quinteto usando etiquetas "ul" y "li". Imprimelo de dos modos distintos: 
            <br>
            a) Indicando sólo los nombres.
            b) Indicando la posición del nombre en el array (0, 1, 2, ...).
        </li>
        <li>
          <a href="/ejercicios/<?php printf("%02d", ++$ejercicio);  ?>.php" target="_blank">Ejercicio <?php printf("%02d", $ejercicio);  ?></a>
          Construír un array con el quinteto inicial de un equipo de basket. Construyelo usando "array()" y usando "[]". Imprimir dicho quinteto usando etiquetas "ul" y "li".
        </li>
      </ul>
    <li>
    <a href="/ejemplos/<?php printf("%02d", ++$ejemplo);  ?>.php" target="_blank">Ejemplo <?php printf("%02d", $ejemplo);  ?></a>
    Uso de arrays ordenadas. Añadir elementos dinámicamente.
    </li>

  </ol>

</body>
</html>