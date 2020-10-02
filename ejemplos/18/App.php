<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    // echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
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

  public function index()
  {
    // echo "Estamos en el index<br>";
    include('views/index.php');
  }
  
  public function login()
  {
    // echo "Estamos en login <br>";
    include('views/form.php');
  }  
}
