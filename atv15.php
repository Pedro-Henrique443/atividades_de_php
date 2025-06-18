<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nomeProduto"])){
        $nomeProduto = $_POST["nomeProduto"];
        echo $nomeProduto . "<br>";
}
    if(isset($_POST["categoriaProduto"])){
        $categoriaProduto = $_POST["categoriaProduto"];
        echo $categoriaProduto . "<br>";
}
    if(isset($_POST["precoProduto"])){
        $precoProduto = $_POST["precoProduto"];
        echo "R$" . $precoProduto . "<br>";
}
    if(isset($_POST["Quantidade"])){
        $Quantidade = $_POST["Quantidade"];
        echo $Quantidade;
}
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <form method="POST">
        <label for="nomeProduto">
            <p>Nome do Produto</p>
        </label>
        <input type="nomeProduto" id="nomeProduto" name="nomeProduto">
        <label for="categoriaProduto">
            <p>Categoria do Produto</p>
            <input type="categoriaProduto" id="categoriaProduto" name="categoriaProduto">
        </label>
        <label for="precoProduto">
            <p>Preço do Produto</p>
        </label>
        <input type="number" id="precoProduto" name="precoProduto">
        <label for="Quantidade">
            <p>Quantidade</p>
        </label>
        <input type="number" id="Quantidade" name="Quantidade">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>