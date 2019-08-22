<?php
include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$idCurso = $_POST["select_curso"];

$sql = "INSERT INTO linhadepesquisa (nomePesquisa,descricao,idCurso) VALUES ('$nome', '$descricao',$idCurso)";



if ($con->query($sql) === TRUE){
 
	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroLinhaPesquisa.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error;

}
$con->close();
?>
