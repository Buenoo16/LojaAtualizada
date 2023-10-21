<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/main.css" rel="stylesheet">
    <title>Produtos por Categoria</title>
</head>
<body>
<?php
require "header.php";
require "categoriaHeader.php"; 
require "conexao.php";


    $categoria_id = $_GET['categoria_id'];

    $comando = "SELECT * FROM produtos WHERE categoria_id = $categoria_id";
    $result = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($result, MYSQLI_ASSOC);

    
    echo "<br>
    <h2>Produtos da Categoria: </h2>";
?>
<div class="flex-container">
    <?php foreach ($registros as $registro) :?>
    
        <div class="item">
            <a href="produtoListarUM.php?id=<?= $registro["id"] ?>">
                <img src="<?= $registro["prodImg"] ?>" alt="Produto" class="produtos-loja">
            </a>
            <h2><a href="produtoListarUM.php?id=<?= $registro["id"] ?>"><?= $registro["titulo"] ?></a></h2>
            <h3> R$<?= $registro["preco"] ?></h3>
            <div class="shop">
                <a href="blonde.html"><button class="comprar-botao">Comprar</button></a>
                <a href="#"><img src="https://i.ibb.co/hFhVN1n/icons8-shopping-cart-50-3.png" alt="icons8-shopping-cart-50-3" border="0"></a>
            </div>
        </div>
        <?php
    endforeach ?>
</div>
 <?php require "footer.php"?>
</body>
</html>
