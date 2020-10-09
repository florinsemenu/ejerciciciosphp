<?php

//creo la clase
class App
{
  //metodo home
  public function home()
  {
    // echo "Estamos en el Home<br>";
    include('views/home.php');
  }

  //creo una funcion
  public function fibonacci()
  {
    //declaro variables
    $a = 0;
    $b = 1;
    $c = 0;
    while ($a < 1000000) {
      $fibonacci[] = $a;
      //en c, almaceno la suma de a y b
      $c = $a + $b;
      //a la variable a le asigno el valor de b
      $a = $b;
      //a la variable b le asigno el valor de c
      $b = $c;
    }

    include('views/fibonacci.php');
  }
  public function potencias2()
  {
    for ($i = 1; $i <= 24; $i++) {
      $resPotencia[] = 2 ** $i;
    }

    include('views/potencias2.php');
  }

  public function factorial()
  {
    $resultado = 1;

    for ($i = 1; $resultado < 1000000; $i++) {
      $resultado = $resultado * $i;
      $factorial[] = $resultado;
    }

    include('views/factorial.php');
  }

  public function primos()
  {
    $esPrimo = true;

    for ($i = 2; $i <= 10000; $i++) {
      $esPrimo = true;
      for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
          $esPrimo = false;
        }
      }
      if ($esPrimo) { //Si es primo lo imprimo.
        $primos[] = $i;
      }
    }



    include('views/primos.php');
  }


  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }

    $this->$method();
  }
}
