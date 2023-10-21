<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="estilos/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


</head>

<?php
    require "conexao.php";
    $comando = "SELECT * FROM produtos";
    $result = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
    //Chamar vetor Associativo
    require "VetorAssociativo.php";
?>
  
  <div class="categoria">
    <h2><a href="dashboard.php">Dashboard do adm</a></h2>
    <h2><a href="usuarioListarTodos.php">Ver usuarios</a></h2>
    <h2><a href="ListarCategorias.php">Ver categorias</a></h2>
    <h2><a href="categoria.php">Adicionar categoria</a></h2>
    <h2><a href="produtoFormulario.php">Adiconar Produto</a></h2>
   
  </div>
  <br>
  <div class="tabelaProd">
    <h2>Id</h2>
    
    <br>
    <h2>Nome</h2>
    <h2>Categoria</h2>
    <h2>Estoque</h2>
    <h2>Preço</h2>

  </div>
<div class="flex-container">
<?php foreach ($registros as $registro ): ?>

<div class="prod-editar">
  
  <h3><?= $registro["id"]?></h3>
    <img src="<?= $registro["prodImg"] ?>" alt="produto">

    <div class="produt-text">
    
    <p><?= $registro["titulo"] ?></p>
    <h3><?= isset($nomesCategorias[$registro["categoria_id"]]) ? $nomesCategorias[$registro["categoria_id"]] : "nenhuma" ?></h3>

   
   <h3><?= $registro["quantidade_estoque"]?></h3>
   <h3>R$<?= $registro["preco"] ?></h3>
    </div>

   <div class="botao-fim">
    <a class="editar-button" href="produtoEditar.php?id=<?=$registro ["id"] ?>">Editar</a>
    <a class="remover-button" href="produtoDeletar.php?id=<?=$registro ["id"] ?>">Remover</a>
 </div>
</div>
<?php  endforeach?>

        </div>
    </div> 
</body>
</html>
