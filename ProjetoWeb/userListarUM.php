<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/listarCateg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
   
</head>
<body>
    <?php
    require "conexao.php";
    require "queryUsuarios.php";
   // error_reporting(E_ALL);
  //  ini_set('display_errors', 1);
    

?>

<div class="categoria">
    <h2><a href="dashboard.php">Dashboard do adm</a></h2>
    <h2><a href="usuarioListarTodos.php">Ver usuarios</a></h2>
    <h2><a href="produtoFormulario.php">Adiconar Produto</a></h2>
   
  </div>
<br>
<h1 class="dados">Dados do usuário: </h1>
    <div class="container">
        
        <h1>Nome: <?=$dadosUsuario['nome']?></h1>
        <br>
        <div class="info">
            <p><strong>Id:</strong><?=$usuario_id?></p>
            <p><strong>Email:</strong><?=$dadosUsuario['email']?></p>
            <p><strong>cpf:</strong> <?=$dadosUsuario['cpf']?></p>
            <p><strong>data de nascimento: </strong><?=$dadosUsuario['dtNasc']?></p>
            <p><strong>Senha: </strong><?=$dadosUsuario['senha']?></p>
        </div>
    
        <div class="fim">
            <h1><a href="usuarioListarTodos.php">Voltar</a></h1>
            <h1><a href="userEditar.php?id=<?=$usuario_id ?>">Editar usuário</a></h1>
            <h1><a href="userDeletar.php?id=<?=$usuario_id?>" onclick="return confirmAcao()">Remover usuário</a></h1>
        </div>

        </div>

        <div class="dados">Endereços do usuário: </div>

        <?php
foreach ($enderecos as $endereco) {
    
    if (!empty($endereco['id'])) {
       
        ?>
        <div class="container">
            <h1>Id do Endereço: <?= $endereco['id'] ?></h1>
            <div class='info'>
                <p><strong>Rua:</strong> <?= $endereco['rua'] ?></p>
                <p><strong>Número:</strong> <?= $endereco['numero'] ?></p>
                <p><strong>Cidade:</strong> <?= $endereco['cidade'] ?></p>
                <p><strong>Estado:</strong> <?= $endereco['estado'] ?></p>
                <p><strong>CEP:</strong> <?= $endereco['cep'] ?></p>
            </div>
            <div class="fim">
                <h1><a href="usuarioListarTodos.php">Voltar</a></h1>
                <h1><a href="enderecoEditar.php?id=<?= $endereco["id"] ?>&idUser=<?= $usuario_id ?>">Editar Endereço</a></h1>
                <h1><a href="enderecoDeletar.php?id=<?= $endereco["id"] ?>&idUser=<?= $usuario_id ?>" onclick="return confirmAcao()">Remover endereço</a></h1>
            </div>
        </div>
        <?php
    }
}
?>

        <script>
            function confirmAcao() {
              var confirmacao = window.confirm("Você tem certeza de que deseja remover? Esta ação não poderá ser desfeita.");
              return confirmacao; 
            }
          </script>
</body>
</html>