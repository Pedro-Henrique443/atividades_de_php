<?php
$nome = "Pedro";
function boasVindas(string $nome){
    return "Bem-vindo(a), " . $nome ."!";
}

echo boasVindas($nome) . "<br>";
?>