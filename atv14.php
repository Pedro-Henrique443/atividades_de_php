<?php

$alunos = [
    "Pedro" => [
        "nota"=> 9,
    ],
    "José" => [
        "nota" => 7,
    ],
    "Cristiano" => [
        "nota" => 8,
]
];

$media = 0;
echo "<br>";

foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: ". $alunoNome ."" . "<br>";
    echo "Nota: " . $alunoNota['nota'] ."<br>";

    $media += $alunoNota['nota'] / 3;
};

echo "Média da turma é: " . number_format($media, 2,'.','.');
?>