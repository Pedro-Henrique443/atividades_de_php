<?php

$nome = "Pedro"; 
$idade = 18;
// $numero1 = 5;
// $numero2 = 10;
// $soma = $numero1 + $numero2;


// esse é o irmão do console.log
echo"<h1>Hello, World!</h1>";
echo"<hr>";
echo "<h1>$nome</h1>";

if($nome === 'Pedro' and $idade === 18) {
    echo "Seja bem-vindo! " . $nome . " !";
}

function saudacao(string $nome){
    return 'Olá, ' . $nome . ' !';
}
echo '<br>';
echo saudacao($nome) . "<br>";

// Debugando variáveis
var_dump($nome, $idade);


?>