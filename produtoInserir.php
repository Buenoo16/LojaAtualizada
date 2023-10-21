<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InserirProduto</title>
</head>

<body>
    <?php
    require "conexao.php";

    $descricao = $_POST["descricao"];
    $titulo = $_POST["titulo"];
    $preco = $_POST["preco"];
    $quantidade_estoque = $_POST["quantidade_estoque"];
    $categoria_id = $_POST["categoria"]; 

    if (empty($descricao) || empty($titulo) || empty($preco) || empty($quantidade_estoque)) {
        die("<h1>Erro: Todos os campos devem ser preenchidos.</h1>");
    }

    $img = $_FILES["img"];
    $source = $img["tmp_name"];

    $cleanedFileName = preg_replace("/[^a-zA-Z0-9.]/", "_", $img["name"]);
    $destino = "imgProd/" . $cleanedFileName;

    move_uploaded_file($source, $destino);

    $comando = "INSERT INTO produtos (titulo, descricao, preco, quantidade_estoque, prodImg, categoria_id) 
                VALUES ('$titulo', '$descricao', '$preco', '$quantidade_estoque', '$destino', '$categoria_id')";
    $result = mysqli_query($conexao, $comando);

    if ($result == true) {
        header("location: dashboard.php");
    
    } else {
        die("<h1> ERRO  </h1>" . mysqli_error($conexao));
    }
    ?>

</body>

</html>
