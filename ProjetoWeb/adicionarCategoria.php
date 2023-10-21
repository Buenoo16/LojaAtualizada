<?php
require "conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

if (empty($descricao) || empty($nome)) {
    die("<h1>Erro: Todos os campos devem ser preenchidos.</h1>");
}

if (!preg_match("/^[a-zA-Z &]+$/", $nome)) {
    die("O nome da categoria contém caracteres inválidos.");
}

// Consulta para verificar se o nome já existe no banco de dados, excluindo a própria categoria
$consulta = "SELECT nome FROM categorias WHERE nome = '$nome'";
$resultConsulta = mysqli_query($conexao, $consulta);

if (mysqli_num_rows($resultConsulta) > 0) {
    ?>
    <script>
        setTimeout(function() {
            window.location.href = 'categoria.php';
        }, 400); 
    </script>
     <?php

    die("<h1>Erro: Já existe uma categoria com esse nome.</h1>");
    
   
}

$sql = "INSERT INTO categorias (nome, descricao) VALUES ('$nome', '$descricao')";

if (mysqli_query($conexao, $sql)) {
    ?>
    <script>
        setTimeout(function() {
            window.location.href = 'ListarCategorias.php';
        }, 250); 
    </script>
     <?php
} else {
    echo "Erro ao inserir categoria: " ;
}
?>
