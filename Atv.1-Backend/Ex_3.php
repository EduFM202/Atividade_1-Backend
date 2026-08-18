<?php
// Tabuada de 1 a 10 do numero informado

$numero = 9;

echo "<h2>Tabuada do $numero </h2>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}
