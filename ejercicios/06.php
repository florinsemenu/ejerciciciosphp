<?php

$jugadores = [0 => "Troya", 1 => "Chris", 2 => "Jorge", 3 => "Zero", 4 => "Ruso"];
echo "<ul>";
foreach ($jugadores as $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ul>";

echo "<ul>";
foreach ($jugadores as $position=>$value) {
    echo "<li>" . $position . " : " . $value . "</li>";
}
echo "</ul>";

?>