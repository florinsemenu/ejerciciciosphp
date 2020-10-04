<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>  

<?php
// definir variables y establecerlas como vacías
$nombreVacio = "";
$nombre = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nombreVacio = "No puede estar vacío";
  } else {
    $nombre = test_input($_POST["nombre"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Datos</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="nombre">
  <?php echo $nombreVacio;?>
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
if(!empty($_POST)){
echo "Bienvenido $nombre <br>";
}
?>

</body>
</html>