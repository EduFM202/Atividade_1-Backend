<?php
// Programa em PHP que armazene em um vetor (array) as notas de 5 alunos de uma turma e depois exibe as medias de cada aluno.

echo "<h2>Notas dos alunos:</h2>";

$notas = array(
    "Aluno 1" => 7.5,
    "Aluno 2" => 8.0,
    "Aluno 3" => 6.5,
    "Aluno 4" => 9.0,
    "Aluno 5" => 5.5
);

foreach ($notas as $aluno => $nota) {
    echo "$aluno: $nota<br>";
}

// media de todos os alunos:
$media = array_sum($notas) / count($notas);

echo "<h2>Média da turma: " . number_format($media, 2) . "</h2>";
