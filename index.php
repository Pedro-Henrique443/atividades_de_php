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

/** 
 * 
 * Função de saudação
 * @param string $name Nome do usuario
 * @return string mensagem de saudação com o nome de usuário
 *
 * 
  */

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

$diaDaSemana = 1;
switch($diaDaSemana){
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-Feira";
        break;
    case 3:
        echo "Terça-Feira";
        break;
    case 4:
        echo "Quarta-Feira";
        break;
    case 5:
        echo "Quinta-Feira";
        break;
    case 6:
        echo "Sexta-Feira";
        break;
    case 7:
        echo "Sábado";
        break;    
    default:
    echo "O número informado não equivale a um dia da semana";
}

$resultado = match($diaDaSemana){
    1 => "Domingo",
    2 => "Segunda-Feira",
    3 => "Terça-Feira",
    4 => "Quarta-Feira",
    5 => "Quinta-Feira",
    6 => "Sexta-Feira",
    7 => "Sábado",
    default => "O número informado não equivale a um dia da semana",
};

echo "<br>";
var_dump($resultado);

?>