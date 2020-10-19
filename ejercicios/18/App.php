<?php

class App
{
    public function login()
    {
        
        include('views/login.php');
    }
    public function auth()
    {
        $usuario = serialize ($_COOKIE['usuario']);
        $pass = serialize ($_COOKIE["contraseña"]);
        include('views/home.php');
    }
    public function home()
    {
    }
    public function logout()
    {
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
