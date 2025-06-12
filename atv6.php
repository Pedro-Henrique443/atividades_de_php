<?php
$nota1 = 8.5;
$nota2 = 9;
$nota3 = 7;
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Notas: $nota1, $nota2, $nota3 <br>";

if ($media < 7){
echo "Média: $media <br> Aluno reprovado.";
} 
else
    echo "Média: $media <br> Aluno aprovado.";
?>