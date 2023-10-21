<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/listarCateg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>
    
</head>
<body>
    <?php
 //   error_reporting(E_ALL);
   // ini_set('display_errors', 1);
    require "conexao.php";

    $id = $_GET["categoria_id"];

    $comando = "SELECT * FROM categorias WHERE categoria_id=$id";
    $resultado = mysqli_query($conexao, $comando);

    $reg = mysqli_fetch_assoc($resultado);

    $nome = $reg["nome"];
    $descricao = $reg["descricao"];
    $data = $reg["data_criacao"];
    ?>

    <div class="categoria">
        <h2><a href="dashboard.php">Dashboard do adm</a></h2>
        <h2><a href="ListarCategorias.php">Ver categorias</a></h2>
        <h2><a href="categoria.php">Adicionar categoria</a></h2>
    </div>

    <br>

    <div class="container">
        <h1><?=$nome?></h1>
        <br>
        <div class="info">
            <p><strong>ID:</strong> <?=$id?></p>
            <p><strong>Data de criação:</strong> <?=$data?></p>
            <p><strong>Descrição:</strong> <?=$descricao?></p>
        </div>

        <div class="fim">
            <h1><a href="ListarCategorias.php">Voltar</a></h1>
            <h1><a href="editarCategoria.php?categoria_id=<?=$id ?>">Editar categoria</a></h1>
            <h1><a href="deletarCategoria.php?categoria_id=<?=$id?>" onclick="return confirmAcao()">Remover categoria</a></h1>
        </div>

        <script>
            function confirmAcao() {
                var confirmacao = window.confirm("Você tem certeza de que deseja remover esta categoria? Esta ação não poderá ser desfeita.");
                return confirmacao;
            }
        </script>
    </div>
</body>
</html>
