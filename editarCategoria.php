<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inserção de Categoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos/formCateg.css">
</head>
<body>
<?php
    require "conexao.php";

   $id = $_GET["categoria_id"];

    $comando = "SELECT * FROM categorias WHERE categoria_id = $id";
    $resultado = mysqli_query($conexao, $comando);
    $categoria = mysqli_fetch_assoc($resultado);
    ?>
    <h2> edição de Categoria</h2>
    <form action="inserir_categoria.php" method="post">
        <label for="id">Id:</label>
        <input type="number" name="id" value="<?=$id?>" readonly>
        <label for="nome">Nome da Categoria:</label>
        <input type="text" name="nome" id="nome" value="<?=$categoria["nome"]?>"  required>
        
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="4" cols="50"><?=$categoria["descricao"]?></textarea>

        <input type="submit" value="Atualizar Categoria">
    </form>
</body>
</html>
