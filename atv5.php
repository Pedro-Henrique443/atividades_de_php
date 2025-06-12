<?php
$jogador = "Pedro";
$pontuacao = 100;
$vitoria = 20;
$derrota = 15;
$cenarioVitoria = $pontuacao + $vitoria;
$cenarioDerrota = $pontuacao - $derrota;

echo "Jogador $jogador começa com: $pontuacao pontos <br>";
echo "Cenário de vitoria: $jogador fica com $cenarioVitoria <br>";
echo "Cenário de derrota: $jogador fica com $cenarioDerrota <br>";
?>