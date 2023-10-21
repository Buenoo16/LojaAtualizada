<!DOCTYPE html>
<html>
<head>
    <title> Cadastro de Usuário</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login.css">
    
</head>
<body>
    
<?php require "header.php" ?>
    <h1>Cadastro de Usuário e Endereço</h1>
    <div class="form-container">
    <form action="usuarioInserir.php" method="post">
        <h2>Dados do Usuário</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="cpf">CPF: (apenas números)</label>
        <input type="text" id="cpf" name="cpf"><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <label for="dtNasc">Data de Nascimento:</label>
        <input type="date" id="dtNasc" name="dtNasc" required><br><br>
        
        <h2>Endereço</h2>
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" required maxlength="8"><br><br>
        
        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" required><br><br>
        
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero" maxlength="10"><br><br>
        
        <label for="numero_apartamento">Número do Apartamento:</label>
        <input type="text" id="numero_apartamento" name="numero_apartamento" maxlength="10"><br><br>
        
        <label for="bloco">Bloco:</label>
        <input type="text" id="bloco" name="bloco" maxlength="20"><br><br>
        
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required maxlength="50"><br><br>
        
        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado" required maxlength="50"><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</div>
<br>
<br>
<?php require "footer.php" ?>
</body>
</html>
