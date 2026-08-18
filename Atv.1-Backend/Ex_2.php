<?php
//  programa PHP que lê a média final de um aluno e a quantidade de faltas.
$nota = 7;
$falta = 10;

echo "Verificando a situação do aluno com nota $nota e faltas $falta...<br><br>";

// Verifica se o aluno foi aprovado
if ($nota >= 6 && $falta <= 15) {
    echo "Você está aprovado!";
} else {
    echo "Você está reprovado!";
}
