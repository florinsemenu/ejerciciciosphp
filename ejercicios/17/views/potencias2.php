<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>POTENCIAS2</h1>
  <button><a href="http://ejercicios.local/ejercicios/17/index.php/?method=home">HOME</a></button>
  <br>
  <ul>
    <?php
    foreach ($resPotencia as $numero) {
    ?>
      <li><?= $numero; ?>
      <?php } ?>
</body>

</html>