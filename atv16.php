<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nomeCliente"])){
        $nomeCliente = $_POST["nomeCliente"];
        echo $nomeCliente . "<br>";
}
    if(isset($_POST["produto"])){
        $produto = $_POST["produto"];
        echo "Produto: " . $produto . "<br>";
}
    if(isset($_POST["avaliacao"])){
        $avaliacao = $_POST["avaliacao"];
        echo  "Avaliação: " . $avaliacao . "<br>";
}
    if(isset($_POST["comentario"])){
        $comentario = $_POST["comentario"];
        echo $comentario;
}
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback do produto</title>
</head>
<body>
    <form method="POST">
        <label for="nomeCliente">
            <p>Nome do Cliente</p>
        </label>
        <input type="nomeCliente" id="nomeCliente" name="nomeCliente">
        <br>
        <label for="produto">
            <p>Produto</p>
        <select name="produto" id="produto" aria-placeholder="Selecione um produto">
            <option value="Computador">Computador</option>
            <option value="Playstation 4">Playstation 4</option>
            <option value="Playstation 5"> Playstation 5</option>
        </select>
        <br>
        </label>
        <br>
            <label for="avaliacao">
                Avaliação:
                <br>
                <input type="radio" id="estrela1" name="avaliacao" value="1" required>
                <label for="estrela1">1 estrela</label>
                <input type="radio" id="estrela2" name="avaliacao" value="2">
                <label for="estrela2">2 estrelas</label>
                <input type="radio" id="estrela3" name="avaliacao" value="3">
                <label for="estrela3">3 estrelas</label>
                <input type="radio" id="estrela4" name="avaliacao" value="4">
                <label for="estrela4">4 estrelas</label>
                <input type="radio" id="estrela5" name="avaliacao" value="5">
                <label for="estrela5">5 estrelas</label>
                <br>
            </label>
            <br>
            <label for="comentario">
                Comentário:
                <br>
                <textarea name="comentario" id="comentario" rows="4" cols="40"></textarea>
            </label>
            <br>
            <button type="submit">Enviar</button>
    </form>
</body>
</html>