<?php
		include "conexao.php";

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	//$acesso =$_POST['TipoAcesso'];


	$sql = "SELECT * FROM professor WHERE email = '$email' and cpf ='$cpf' and senha = '$senha' ";

	$res = $con->query($sql);
	$linha = $res->fetch_assoc();

$id = $linha['id'];
$nome = $linha['nome'];
$user = $linha['email'];
$pass = $linha['senha'];
$tipo = $linha['perfilUsuario'];
$user2 = $linha['cpf'];

if ($email == $user || $cpf == $user2  && $senha == $pass && $tipo==1)

{
	session_start();
    $_SESSION['id'] = $id;
    $_SESSION['Nome'] = $nome;
    $_SESSION['user'] = $user;

header('location: indexProfessor.php'); 
}

else

{
	header('location: loguin.php');
}

?>
