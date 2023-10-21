<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php require "header.php" ?>
    <h1 class="client-log">Login do cliente</h1>
    <div class="principal">
        <div class="login">
            <h1>Já é cadastrado?</h1>
            <p>Então entre com seus dados de login e senha</p>
            <form action="" method="post">
                <p>Seu email: </p>
                <input type="email" placeholder="ex: joao@gmail.com" name="email">
                <p>Sua senha:</p>
                <input type="password" name="senha">
                <div class="esqueci-senha">
                    <a href="#">Esqueci a senha</a>
                    <button type="submit">Entrar</button>
                </div>
                <div class="redesocial">
                    <p>Entrar com sua conta do google ou facebook</p>
                    <a href="#"><img src="https://i.ibb.co/qYVkHS3/icons8-facebook-50.png" alt="facebook"></a>
                    <a href="#"><img src="IMG/icons8-google-50.png" alt="google"></a>
                </div>
            </form>
        </div>
        <div class="login2">
            <form action="usuarioInserir.php" method="post">
                <h1>Ainda não é cadastrado no site?</h1>
                <p>Faça agora mesmo o cadastro</p>
                <p>Seu email: </p>
                <input type="email" placeholder="ex: joao@gmail.com" name="email">
                <p>Sua senha:</p>
                <input type="password" name="senha">
                <p>CPF (apenas números)</p>
                <input type="number" placeholder="ex: 57846838420" name="cpf">
                <p>Seu nome:</p>
                <input type="text" placeholder="João da silva" name="nome">
                <p>Data de nascimento</p>
                <input type="date" name="dtNasc">
            
                
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    <?php require "footer.php" ?>
</body>
</html>
