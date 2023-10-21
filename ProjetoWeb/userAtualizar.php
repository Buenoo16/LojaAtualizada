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

$id = $_POST["id"]; 

//Verificar se um dos campos estão vazios
if (empty ($id) || empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($dtNasc)) {
    die("<h1> Todos os campos devem ser preenchidos.</h1>");
}

//Verifcar se nome tem caracteres reais
if (!preg_match("/^[a-zA-Z ]+$/", $nome)) {
    die("O nome contém caracteres inválidos.");
}

//Verificar se senha tem pelo menos 8 digtos
if (strlen($senha) < 8) {
    die ("A senha deve ter 8 dígitos ou mais.");
}

//Verifica se o cpf tem 11 digitos
if (strlen($cpf) !== 11) {
    die("<h1> CPF deve ter 11 dígitos.</h1>");
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

//verifcção de dados
$nome = mysqli_real_escape_string($conexao, $nome);
$email = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);
$cpf = mysqli_real_escape_string($conexao, $cpf);
$dtNasc = mysqli_real_escape_string($conexao, $dtNasc);


$comando = "UPDATE usuarios 
            SET nome = '$nome', email = '$email', cpf = '$cpf', senha = '$senha', dtNasc = '$dtNasc' 
            WHERE id = '$id'";

$result = mysqli_query($conexao, $comando);

if ($result == true){
    echo"<h1> Atualização feito com Sucesso!!</h1>";
    ?>
     <script>
  setTimeout(function() {
    window.location.href = 'userListarUM.php?id=<?= $id ?>';
  }, 500);
</script>
   
    <?php
     }else{
    die( "erro");
}
?>

</body>



<html>