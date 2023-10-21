<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Produto</title>
            <link rel="stylesheet" href="estilos/prodListarUm.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

       

    
</head>

    <body>
        

    
<?php
require "header.php";
require "conexao.php";

$id = $_GET["id"];

$comando = "SELECT p.*, c.nome AS categoria_nome
            FROM produtos p
            LEFT JOIN categorias c ON p.categoria_id = c.categoria_id
            WHERE p.id = $id";
$resultado = mysqli_query($conexao, $comando);

$reg = mysqli_fetch_assoc($resultado);

$titulo = $reg["titulo"];
$descricao = $reg["descricao"];
$preco = $reg["preco"];
$quantidade_estoque = $reg["quantidade_estoque"];
$categoria_nome = $reg["categoria_nome"];
?>
<div class="container">
    <div class="pai-img">
        <div class="imagens-baixo">
            <img src="<?= $reg["prodImg"] ?>" alt="Produto" class="produtos-loja">
        </div>
    </div>
    <div class="titulo">
        <h1><?=$titulo?></h1>
        <div class="categoria">
            <h2><strong>Categoria:</strong></h2>
            <h3><?=$categoria_nome?></h3>
        </div>
        <div class="descricao">
            <h2><strong>Descrição:</strong></h2>
            <h3><?=$descricao?></h3>
        </div>
        <div class="preco">
            <h1><strong>Preço:</strong></h1><h1 class="valorprod"> R$<?=$preco?></h1>
        </div>
        
        <div class="comprar-form">
            <form action="carrinho.php" method="post">
                <input type="hidden" name="produto_id" value="<?=$id?>">
                <input type="submit" value="Comprar">
                <input type="submit" value="Add Carrinho">
            </form>
        </div>
    </div>
</div>
<?php 
require "footer.php";
?>


</html>
