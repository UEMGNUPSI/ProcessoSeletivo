<?php
include_once "../DAO/conexao.php";

$idProfessor = $_POST["select_professor"];
$idLinhaPesquisa = $_POST["select_linhapesquisa"];

$sql = "INSERT INTO vinculo (idProfessor,idLinhaPesquisa) VALUES ($idProfessor, $idLinhaPesquisa)";



if ($con->query($sql) === TRUE){
 
	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastrarVinculo.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error;

}
$con->close();
?>
