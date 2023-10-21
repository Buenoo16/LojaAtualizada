<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>


<body>
    

<?php

require "conexao.php";


$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$dtNasc = $_POST["dtNasc"];

$rua = $_POST['rua'];
$numero = $_POST['numero'];
$numero_apartamento = $_POST['numero_apartamento'];
$bloco = $_POST['bloco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

//Verificar se um dos campos estão vazios
if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($dtNasc) ) {
    die("<h1> Todos os campos obrigatórios devem ser preenchidos.</h1>");
}
if (!preg_match("/^[a-zA-ZÀ-ú\s]*$/u", $nome. $rua. $cidade. $estado)) {
    die("Os dados contêm caracteres inválidos.");
}

//Verificar se senha tem pelo menos 8 digtos
if (strlen($senha) < 8) {
    die ("A senha deve ter 8 dígitos ou mais.");
}

//Verifica se o cpf tem 11 digitos
if (strlen($cpf) !== 11) {
    die("<h1> CPF deve ter 11 dígitos.</h1>");
}

function validaEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

if (!validaEmail($email)) {
    echo "E-mail inválido.";
    exit; 
}
//validar data
$dtNascTimestamp = strtotime($dtNasc);

if ($dtNascTimestamp === false) {
    die("<h1>Data de nascimento inválida</h1>");
}

$dtMin = strtotime("1900-01-01");

if ($dtNascTimestamp > time() || $dtNascTimestamp < $dtMin) {
    die("<h1>Data não pode ser maior que a atual ou menor que 01/01/1900 </h1>");
}

$cep = preg_replace('/[^0-9-]/', '', $cep);


if (strlen($cep) == 8) {
   
    
} else {
    echo "CEP inválido";
}

//verifcção de dados
$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);
$cpf = mysqli_real_escape_string($conexao, $cpf);
$dtNasc = mysqli_real_escape_string($conexao, $dtNasc);




//Verficar se email ou cpf já são cadastrados
$comando = "SELECT COUNT(*) FROM usuarios WHERE email = '$email' OR cpf = '$cpf'";
$result = mysqli_query($conexao, $comando);
$row = mysqli_fetch_row($result);

if ($row[0] > 0) {
    die("<h1> E-mail ou CPF já cadastrados.</h1>");
}



$comando = "INSERT INTO usuarios (nome, email, cpf, senha, dtNasc) values ('$nome', '$email', '$cpf', '$senha', '$dtNasc')";
$result = mysqli_query($conexao, $comando);




if ($result == true) {
    
    $usuario_id = mysqli_insert_id($conexao); // Obtém o ID do usuário inserido
    
    $endereco_comando = "INSERT INTO enderecos (usuario_id, rua, numero, numero_apartamento, bloco, cidade, estado, cep) VALUES ('$usuario_id', '$rua', '$numero', '$numero_apartamento', '$bloco', '$cidade', '$estado', '$cep')";
    
    $endereco_result = mysqli_query($conexao, $endereco_comando);

    if ($endereco_result == true) {
        echo "<h1>Cadastro de usuário e endereço feito com sucesso!</h1>";
        ?>
        <script>
            setTimeout(function() {
                window.location.href = 'produtosListarTodos.php';
            }, 700); 
        </script>
        <?php
    } else {
        die("<h1>Erro ao inserir endereço:</h1>" . mysqli_error($conexao));
    }
} else {
    die("<h1>Erro ao inserir usuário:</h1>" . mysqli_error($conexao));
}

// Feche a conexão com o banco de dados
mysqli_close($conexao);

?>

</body>



<html>