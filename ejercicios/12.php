<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
</head>
<body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <input type="submit" value="enviar">
    </form>
    
    <h2>Datos enviados</h2>
    <?php
    if(isset($_POST) && !empty($_POST)){
        echo "Bienvenido $_POST[nombre]";
    }
     else {
         echo "Todavía no hemos recibido nada!";
    }
    ?>
</body>
</html>