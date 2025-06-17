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



$arr = array(1,2,3,4,5);

$arr2 = [1,2,3,4,5];

echo $arr[0] . " " .  $arr2[1];
echo "<br>";
foreach($arr2 as $number){
    echo "Número: ". $number . "<br>";
}



$usuario = [
    "nome" => "Ivy",
    "idade" => 17,
    "email" => "ivy@example.com",
];

?>