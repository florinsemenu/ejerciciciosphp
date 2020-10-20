<?php
//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">';
if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    echo "Titulo: $_POST[titulo]<br>";
    echo "Autor: $_POST[autor]<br>";
    echo "Editorial: $_POST[editorial]<br>";
    echo "Páginas: $_POST[paginas]<br>";  
}
 else {
     echo "No hemos recibido nada!";
}