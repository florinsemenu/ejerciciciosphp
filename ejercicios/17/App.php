<?php

//creo la clase
class Programas{
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
    for ($i = 1; $i <= 10; $i++){
        $fibonacci [] = $a;
        //en c, almaceno la suma de a y b
        $c = $a + $b;
        //a la variable a le asigno el valor de b
        $a = $b;
        //a la variable b le asigno el valor de c
        $b = $c;
    }

    include ('views/fibonacci.php');
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

?>