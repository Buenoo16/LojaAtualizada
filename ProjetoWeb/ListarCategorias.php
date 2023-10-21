<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="estilos/Listar.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


</head>

<?php
    require "conexao.php";
    $comando = "SELECT * FROM categorias";
    $result = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($result, MYSQLI_ASSOC);
  ?>
  
  <div class="categoria">
    <h2><a href="dashboard.php">Dashboard do adm</a></h2>
    <h2><a href="usuarioListarTodos.php">Ver usuarios</a></h2>
    <h2><a href="categoria.php">Adicionar categoria</a></h2>
    <h2><a href="produtoFormulario.php">Adiconar produto</a></h2>
   
  </div>
  <br>
  <div class="tabelaProd">
    <h2>Id</h2>
    
    <h2>Categoria</h2>
    <br>
    <h2>Data de criação</h2>
    <br>
    
    <h2>Acões</h2>
    <br>

    
  </div>
<div class="flex-container">
<?php foreach ($registros as $registro ): ?>

<div class="prod-editar">
  
  <h3><?= $registro["categoria_id"]?></h3>
    

    <div class="produt-text">
    
    <h3><?= $registro["nome"] ?></h3>

    
    <h3><?= $registro["data_criacao"] ?></h3>

   
   
    </div>

    <div class="botao-fim">
      <a class="editar-button" href="categoriaListarUM.php?categoria_id=<?=$registro["categoria_id"] ?>">Ver Categoria</a>
      <a class="editar-button" href="editarCategoria.php?categoria_id=<?=$registro["categoria_id"] ?>">Editar</a>
      <a class="editar-button" href="deletarCategoria.php?categoria_id=<?=$registro["categoria_id"] ?>" onclick="return confirmAcao()">Remover categoria</a>
  </div>
  </div>
  <?php endforeach?>
  <script>
    function confirmAcao() {
      var confirmacao = window.confirm("Você tem certeza de que deseja remover esta categoria? Esta ação não poderá ser desfeita.");
      return confirmacao; 
    }
  </script>
  
  Com essa alteração, a função confirmAcao retornará true quando o usuário clicar em "OK" na caixa de diálogo de confirmação e false quando clicar em "Cancelar". O atributo onclick agora verifica o valor retornado por confirmAcao e, se for false, a ação de remoção será cancelada.
  
        </div>
    
</body>
</html>
