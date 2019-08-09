<?php

include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);


$sql = "INSERT INTO ativacao (nome,email,senha,perfilUsuario) 
VALUES ('$nome','$email','$senhaSegura',0)";


$idAtivacao = "SELECT LAST_INSERT_ID from Ativacao";
$id= md5($idAtivacao);

$assunto = "Ative o seu cadastro ".$nome."!";
$link = "http://localhost/processoseletivo/ProcessoSeletivo/EnvioCadastro.php?h=".$id;
$mensagem = "Clique aqui para ativar sua conta".$link;
$header = "From:".$nome;

mail($email,$assunto,$mensagem,$header);

if ($con->query($sql) === TRUE){
	echo "<script>alert('Cadastro realizado com sucesso!');window.location='../loguin.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}


$con->close();
?>
