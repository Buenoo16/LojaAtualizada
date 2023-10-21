<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produto</title>
    <style>
    body {
        background-color: white;
        color: #104A80;
        font-family: 'Assistant', sans-serif;
    }
    h1 {
        color: #104A80;
    }
    select {
        background-color: white;
        padding: 5px;
        width: 80px;
        border-radius: 7px;
        cursor: pointer;
    }
    form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    input[type="text"] {
        color: black;
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

    /* Adicione estilos para telas menores (por exemplo, smartphones) aqui */
    @media screen and (max-width: 768px) {
        form {
            padding: 10px;
        }
        select {
            width: 100%;
        }
        input[type="file"] {
            padding: 5px 10px;
        }
        button {
            margin-top: 10px;
        }
    }
</style>

</head>
   
<body>
    <h1>Cadastrar novo produto</h1>

    <form action="produtoInserir.php" method="post" enctype="multipart/form-data">
        Titulo <input type="text" name="titulo"><br>
        <br>
        Descricao <textarea name="descricao" rows="2" cols="50"></textarea><br>
        <br>
        Preco <input type="text" name="preco"><br>
        <br>
        Quantidade Estoque <input type="number" name="quantidade_estoque"><br>
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

        Inserir Imagens <input type="file" name="img"><br>
        <button type="submit">Cadastrar Produto</button>
    </form>
    <h1><a href="dashboard.php">Ver Dashboard</a></h1>
</body>
</html>
