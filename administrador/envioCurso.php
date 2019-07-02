<?php

include_once "../DAO/conexao.php";

$result_consultaCurso= "SELECT * FROM curso ";

$res = $con-> query($result_consultaCurso);
$linha = $res->fetch_assoc();

$nome = $_POST["nome"];
$sql = "INSERT INTO curso (nomeCurso) VALUES ('$nome')";

if ($linha['nomeCurso'] = $nome){

echo "<script>alert('Curso já existente! Cadastre um curso novo');window.location='CadastroCurso.php'</script>";

}

else if ($con->query($sql) === TRUE){

	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroCurso.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>
