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
            color: #0f4c83;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color : #0f4c83;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            background-color: white;
            border: none;
            border-bottom: 2px solid #0f4c83;
            color: #0f4c83;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0f4c83;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #003d6b;
        }
    </style>
</head>
<body>
    <?php
    require "conexao.php";

    $id = $_GET["id"];

    $comando = "SELECT * FROM usuarios WHERE id = $id";
    $resultado = mysqli_query($conexao, $comando);
    $usuario = mysqli_fetch_assoc($resultado);
    ?>
    <h1>Editar usuário</h1>

    <form action="userAtualizar.php" method="post">
        Id
    <input type="text" name="id" value="<?=$usuario["id"]?>" readonly>
        <br>
        Nome <input type="text" name="nome" value="<?=$usuario["nome"]?>">
        <br>
        Email <input type="email" name="email" value="<?=$usuario["email"]?>">
        <br>
        CPF <input type="number" name="cpf" value="<?=$usuario["cpf"]?>">
        <br>
        Senha <input type="password" name="senha" value="<?=$usuario["senha"]?>">
        <br>
        Data de Nascimento <input type="date" name="dtNasc" value="<?=$usuario["dtNasc"]?>">
        <button type="submit">Atualizar usuário</button>
    </form>
</body>
</html>
