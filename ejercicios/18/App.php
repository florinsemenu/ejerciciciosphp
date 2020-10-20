<?php

class App
{
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }

        $this->$method();
    }
    public function login()
    {
        if (isset($_COOKIE['name'])) {
            header('Location: index.php?method=home');
        }
        include('views/login.php');
    }
    public function auth()
    {
        //recoger datos POST
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
        } else {
            header('Location: ?method=login');
            return;
        }
        //guardar en cookie
        setcookie('name', $name, time() + 60 * 60 * 2);
        setcookie('password', $password, time() + 60 * 60 * 2);
        //reenviar a "home"
        //le dice al navegador que vaya a otro sitio:
        //http://ejercicios.local/ejercicios/18/index.php?method=home
        header('Location: index.php?method=home');
    }


    public function home()
    {
        include('views/home.php');
    }
    public function logout()
    {
        setcookie('name', '', time() - 1);
        setcookie('password', '', time() - 1);
        header('Location: index.php?method=login');
    }
}
