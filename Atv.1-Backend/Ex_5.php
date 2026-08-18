<?php
// programa em PHP com uma função chamada calcularIMC

function IMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}

echo "<h2>Cálculo do IMC</h2>";

echo "Peso: 70 kg<br>";
echo "Altura: 1,75 m<br><br>";

function total()
{
    return IMC(70, 1.75);
}

echo "IMC: " . number_format(total(), 2);

// classificação Abaixo do peso, Peso normal, Sobrepeso ou Obesidade.

if (total() < 18.5) {
    echo "<br>Classificação: Abaixo do peso";
} elseif (total() >= 18.5 && total() < 25) {
    echo "<br>Classificação: Peso normal";
} elseif (total() >= 25 && total() < 30) {
    echo "<br>Classificação: Sobrepeso";
} else {
    echo "<br>Classificação: Obesidade";
}
