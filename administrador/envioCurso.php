<?php

include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$sql = "INSERT INTO curso (nomeCurso) VALUES ('$nome')";

if ($con->query($sql) === TRUE){

	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroCurso.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>
