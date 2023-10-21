<?php
require "conexao.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$id = $_POST["id"];

if (empty($descricao) || empty($nome)) {
    die("<h1>Erro: Todos os campos devem ser preenchidos.</h1>");
}

if (!preg_match("/^[a-zA-Z &]+$/", $nome)) {
    die("O nome da categoria contém caracteres inválidos.");
}

// Consulta para verificar se o nome já existe no banco de dados, excluindo a própria categoria
$consulta = "SELECT nome FROM categorias WHERE nome = '$nome' AND categoria_id <> '$id'";
$resultConsulta = mysqli_query($conexao, $consulta);

if (mysqli_num_rows($resultConsulta) > 0) {
    die("<h1>Erro: Já existe uma categoria com esse nome.</h1>");
}

$comando = "UPDATE categorias SET nome = '$nome', descricao = '$descricao' WHERE categoria_id = '$id'";
$result = mysqli_query($conexao, $comando);

if ($result == true){
    echo ("<h1>Categoria atualizada com sucesso!!</h1>"); ?>
    <script>
        setTimeout(function() {
            window.location.href = 'ListarCategorias.php';
        }, 400); 
    </script> <?php
} else {
    die("<h1> ERRO ao atualizar categoria</h1>" . mysqli_error($conexao));
}
?>
