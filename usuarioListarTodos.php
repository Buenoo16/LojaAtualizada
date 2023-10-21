<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="estilos/Listar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


</head>

<?php
    require "conexao.php";
    $comando = "SELECT usuarios.*, COALESCE(enderecos.cep, 'Não cadastrado') as cep
    FROM usuarios
    LEFT JOIN enderecos ON usuarios.id = enderecos.usuario_id;    
    ";
    $result = mysqli_query($conexao, $comando);
    $registros = mysqli_fetch_all($result, MYSQLI_ASSOC);

  
  ?>
  
  <div class="categoria">
    <h2><a href="dashboard.php">Dashboard do adm</a></h2>
    <h2><a href="usuarioListarTodos.php">Ver usuarios</a></h2>
    <h2><a href="ListarCategorias.php">Ver categorias</a></h2>
    <h2><a href="produtoFormulario.php">Adiconar produto</a></h2>
   
  </div>
  <br>
  <div class="tabelaProd">
    <h2>Id</h2>
    <h2>Nome</h2>
    <h2>Cep</h2>
    <br>
    <h2>Ações</h2>
    
  </div>
<div class="flex-container">
<?php foreach ($registros as $registro ): ?>

<div class="prod-editar">
  
  <h3><?= $registro["id"]?></h3>
    

    <div class="produt-text">
    
    <h3><?= $registro["nome"] ?></h3>

   
   <h3><?= $registro["cep"]?></h3>
   
    </div>

    <div class="botao-fim">
      <a class="editar-button" href="userListarUM.php?id=<?=$registro["id"] ?>">Ver usuário</a>
      <a class="editar-button" href="userEditar.php?id=<?=$registro["id"] ?>">Editar</a>
      <a class="editar-button" href="userDeletar.php?id=<?=$registro["id"] ?>" onclick="return confirmAcao()">Remover usuário</a>
  </div>
  </div>
  <?php endforeach?>
  <script>
    function confirmAcao() {
      var confirmacao = window.confirm("Você tem certeza de que deseja remover este usuário? Esta ação não poderá ser desfeita.");
      return confirmacao; 
    }
  </script>
  
    
        </div>
    
</body>
</html>
