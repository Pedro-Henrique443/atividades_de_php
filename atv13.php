<?php

$produtos = [
    "ovo" => [
        "preço" => 12,
    ],
    "frango" => [
        "preço" => 50,
    ],
    "pão" => [
        "preço" => 8,
    ] 
];

foreach ($produtos as $nome => $preço) {
    echo "Produto: ". $nome ." R$ ". $preço['preço'] ." " . "<br>";
}



?>