<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
<?php
require "conexao.php";
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Consulta para buscar todas as categorias
$sql = "SELECT categoria_id, nome FROM categorias";
$result = $conexao->query($sql);

?>

<div class="categoria">
    <h2><a href="dashboard.php"> Dashboard</h2></a>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            $categoria_id = $row['categoria_id'];
            $categoria_nome = $row['nome'];
            ?>
            <h2><a href="produtos_por_categoria.php?categoria_id=<?= $categoria_id ?>"><?= $categoria_nome ?></a></h2>
            <?php
        }
    }
    ?>
</div>


</body>
</html>
