<?php

include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);



$sql = "INSERT INTO candidato (nome,email,senha,perfilUsuario) 
VALUES ('$nome','$email','$senhaSegura',0)";

  

if ($con->query($sql) === TRUE){

	echo "<script>alert('Cadastro realizado com sucesso!');window.location='../loguin.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>
