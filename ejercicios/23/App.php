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
        session_start();
        //si el usuario ya está conectado (guardado en la session) lo lleva directamente a Home
        if (isset($_SESSION['name'])) {
            header('Location: index.php?method=home');
            return;
        }
        include('views/login.php');
    }


    public function auth()
    {   
        session_start();
        //recoger datos POST
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
        } else {
            header('Location: ?method=login');
            return;
        }
        //guardar en sesion
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        
        //reenviar a "home"
        //le dice al navegador que vaya a otro sitio:
        //http://ejercicios.local/ejercicios/18/index.php?method=home
        header('Location: index.php?method=home');
    }



    public function home()
    {
        session_start();
        //si hay deseos, los tomo
        if (isset($_SESSION['deseos'])) {
            
            $deseos = $_SESSION['deseos'];
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        include('views/home.php');
    }



    public function new()
    {
        session_start();
        //si no existe new, se va a home
        if (!isset($_POST['new'])) {
            header('Location: index.php?method=home');
            return;
        }
        //si existe new
        $new = $_POST['new'];
        //si hay deseos, los tomo
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        $deseos[] = $new;
        $_SESSION['deseos'] = $deseos;

        foreach ($deseos as $id => $deseo) {}
        $file = fopen("archivo.txt", "a");
        fwrite($file, $deseo . PHP_EOL);
        
        header('Location: index.php?method=home');
    }



    public function delete()
    {    session_start();
        //si hay deseos, los tomo
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
        }
        //si no, la lista de deseos es igual al array vacío(aquí se crea el array)
        else {
            $deseos = [];
        }
        $id = $_GET['id'];
        unset($deseos[$id]);
        $_SESSION['deseos']= $deseos;
        header('Location: index.php?method=home');
    }



    public function empty()
    {   
        session_start();
        //unset($_SESSION['deseos']);
        //Así vacío los deseos sin destruir la sesión. Con esto obligo a que siga siendo un array.
        $_SESSION['deseos'] = [];
        header('Location: index.php?method=home');
    }



    public function logout()
    {   
        session_start();
        session_destroy();
        header('Location: index.php?method=login');
    }

   
}
