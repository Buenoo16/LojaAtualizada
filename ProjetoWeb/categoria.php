<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inserção de Categoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos/formCateg.css">
</head>
<body>
    <h2> Inserção de Categoria</h2>
    <form action="adicionarCategoria.php" method="post">
        <label for="nome">Nome da Categoria:</label>
        <input type="text" name="nome" id="nome" required>
        
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="4" cols="50"></textarea>
        
        <input type="submit" value="Inserir Categoria">
    </form>
</body>
</html>
