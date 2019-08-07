<?php
		include "conexao.php";

		session_start();
	$acesso =$_POST['Tipo'];
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	if ($acesso==0){
		$sql = "SELECT * FROM candidato WHERE email = '$usuario' or cpf ='$usuario' ";
		
		$res = $con->query($sql);
		$linha = $res->fetch_assoc();
	
	$id = $linha['idCandidato'];
	$nome = $linha['nome'];
	$user = $linha['email'];
	$senha_db = $linha['senha'];
	$tipo = $linha['perfilUsuario'];
	$user2 = $linha['cpf'];

	
	if (($usuario == $user || $usuario == $user2 ) && password_verify($senha,$senha_db) && $tipo == 0 )

	{
	
		session_start();
		$_SESSION['idCandidato'] = $id;
		$_SESSION['nome'] = $nome;
		$_SESSION['user'] = $user;
	
		header('location: ../candidato/Inscricao.php'); 
	}

	else

	{
		
		header('location: ../loguin.php');
	}
	

	}

 else if($acesso==1){


$sql = "SELECT * FROM professor WHERE email = '$usuario' or cpf ='$usuario' ";

	$res = $con->query($sql);
	$linha = $res->fetch_assoc();

$id = $linha['idProfessor'];
$nome = $linha['nomeProfessor'];
$user = $linha['email'];
$senha_db = $linha['senha'];
$tipo = $linha['perfilUsuario'];
$user2 = $linha['cpf'];


if (($usuario == $user || $usuario == $user2 ) && password_verify($senha,$senha_db) && ($tipo == 1 || $tipo == 2))

{

	session_start();
    $_SESSION['idProfessor'] = $id;
    $_SESSION['nome'] = $nome;
	$_SESSION['user'] = $user;

	header('location: ../administrador/IndexProfessor.php'); 
}


else

{
	header('location: ../loguin.php');
}

 }

?>