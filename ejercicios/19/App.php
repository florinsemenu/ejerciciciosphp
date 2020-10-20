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
        //si el usuario ya está conectado (guardado en la cookie) lo lleva directamente a Home
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

        //si hay deseos, los tomo
        if (isset($_COOKIE['deseos'])) {
            //con el serialize convierto el array a texto, con unserialize convierto el texto en array
            $deseos = unserialize($_COOKIE['deseos']);
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        include('views/home.php');
    }
    public function new()
    {
        //si no existe new, se va a home
        if (!isset($_POST['new'])) {
            header('Location: index.php?method=home');
            return;
        }
        //si existe new
        $new = $_POST['new'];
        //si hay deseos, los tomo
        if (isset($_COOKIE['deseos'])) {
            //con el serialize convierto el array a texto, con unserialize convierto el texto en array
            $deseos = unserialize($_COOKIE['deseos']);
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        $deseos[] = $new;
        setcookie('deseos', serialize($deseos), time() + 60 * 60 * 2);
        header('Location: index.php?method=home');
    }
    public function delete()
    {   
        //si hay deseos, los tomo
        if (isset($_COOKIE['deseos'])) {
            //con el serialize convierto el array a texto, con unserialize convierto el texto en array
            $deseos = unserialize($_COOKIE['deseos']);
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        $id = $_GET['id'];
        unset($deseos[$id]);
        setcookie('deseos', serialize($deseos), time() + 60 * 60 * 2);
        header('Location: index.php?method=home');
    }

    public function empty()
    {
        setcookie('deseos', '', time() -1);
        header('Location: index.php?method=home');
    }

    public function logout()
    {
        setcookie('name', '', time() - 1);
        setcookie('password', '', time() - 1);
        setcookie('deseos', '', time() -1);
        header('Location: index.php?method=login');
    }
}
