<?php 

require "conexao.php";

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$qtdEstoque = $_POST["quantidade_estoque"];
$categoria_id= $_POST["categoria"];
$img = $_FILES["img"];

$source = $img["tmp_name"];

$destino = "imgProd/" . $img["name"];

move_uploaded_file($source, $destino);

$comando = "UPDATE produtos SET titulo = '$titulo',
descricao = '$descricao', 
preco = '$preco',
quantidade_estoque = '$qtdEstoque',
categoria_id = '$categoria_id',
prodImg = '$destino'
WHERE id = $id";

$resultado = mysqli_query($conexao, $comando);

if($resultado){
    header("location: dashboard.php");
}else {
    die(mysqli_error($conexao));
}
