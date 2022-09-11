<?php
/*include_once('conexao.php');*/

$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
echo "Cadastro realizado com sucesso <br>";

echo "Nome: $nome <br>";
echo "Senha: $email <br>";
echo "emil: $senha <br>";
echo "genero: $género <br>";


$re = "INSERT INTO tb_usuario(NOME,Género,Email,Senha) VALUES('$nome',$senha','$email')";

mysqli_query($conexao, $re);

if (mysqli_insert_id($conexao)) {

      header("location:contacto.php");
} else {

      header("location:contacto.php");
}
