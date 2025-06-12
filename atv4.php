<?php
$preco = 10.50;
$desconto = 0.10;
$precoComDesconto = $preco - ($preco * $desconto);

echo "O preço do produto é: R$ $preco <br>"; 
echo 'O desconto é de: ' . ($desconto * 100) . '% <br>';
echo "O preço com desconto é: R$ $precoComDesconto";

?>