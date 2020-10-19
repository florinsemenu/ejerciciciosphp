<?php
echo '<meta charset="UTF-8">';
if(isset ($_POST) && !empty($_POST)){
    echo "Bienvenido $_POST[nombre]";
 
}
 else {
     if (!isset ($_POST) && empty ($_POST)){
     echo "No hemos recibido nada!";
     echo ('<form method="post" action="pruebaFormaction.php">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>

        <input type="submit" value="Enviar">
    </form>');
}

}