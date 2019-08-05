<?php

include_once "../DAO/conexao.php";
$nome = $_POST["nome"];

$sql = $con->query("SELECT * FROM curso WHERE nomeCurso='$nome'");

if(mysqli_num_rows($sql) > 0){
	echo "<script>alert('Curso já existente! Cadastre um curso novo');window.location='CadastroCurso.php'</script>";
exit();
} else {
 if(!$con->query("INSERT INTO curso (nomeCurso) VALUES ('$nome')")) die ('Os dados não foram inseridos');
 echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroCurso.php'</script>";
}
$con->close();
?>