<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <style>
           body {
            background-color: white;
            color: #104A80;
            font-family: 'Assistant', sans-serif;
            font-size: 22px;
        }
        a{
            text-decoration: none;
        }
        h1 {
            color: #104A80;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        input[type="text"] {
    border: 1px solid #104A80;
    border-radius: 5px; 
    padding: 5px; 
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
    transition: all 0.2s; 
}


input[type="text"]:hover {
    
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
textarea {
    border: 1px solid #ccc;
    border-radius: 5px; 
    padding: 5px; 
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); 
    transition: all 0.2s; 
    resize: none; 
}


textarea:hover {
    border-color: #999;
}


textarea:focus {
    outline: none; 
    border-color: #007bff; 
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3); 
}


input[type="text"]:focus {
    outline: none; 
    border-color: #007bff; 
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

        input[type="file"] {
            padding: 5px 20px;
            background-color: #104A80;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            cursor: pointer;
        }
        button {
            margin-top: 15px;
            background-color: #104A80;
            padding: 10px 15px;
            border-radius: 10px;
            cursor: pointer;
            color: white;
        }
        </style>
</head>
<body>
    <?php
    require "conexao.php";

    $id = $_GET["id"];

    $comando = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conexao, $comando);
    $produto = mysqli_fetch_assoc($resultado);
    ?>
    <h1>Editar produto</h1>

    <form action="produtoAtualizar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$produto["id"]?>">
    <br>
    <br>
    Título <input type="text" name="titulo" value="<?=$produto["titulo"]?>">
    <br>
    <br>
    Descrição <textarea name="descricao" rows="4" cols="40"><?=$produto["descricao"]?></textarea>
    <br>
    <br>
    Preço <input type="text" name="preco" value="<?=$produto["preco"]?>">
    <br>
    <br>
    Quantidade em Estoque <input type="number" name="quantidade_estoque" value="<?=$produto["quantidade_estoque"]?>">
    <br>
    <br><label for="categoria">Categoria:</label>
    <select name="categoria" id="categoria">
        <?php
        require "conexao.php";
        

        $comando = "SELECT categoria_id, nome FROM categorias";
        $result = mysqli_query($conexao, $comando);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=" . $row['categoria_id'] . ">" . $row['nome'] . "</option>";
            }
        } else {
            echo "<option value='0'>Nenhuma categoria encontrada</option>";
        }
        ?>
    </select><br><br>

<img src="<?= $produto["prodImg"] ?>">
<br>
    Atualizar imagem <input type="file" name="img">
    <br>
    <button type="submit">Atualizar Produto</button>
</form>

    <h1><a href="dashboard.php">Voltar</a></h1>
</body>
</html>
