<?php

include_once "../DAO/conexao.php";

$nomeProcesso = $_POST["nomeProcesso"];
$descricao = $_POST["descricao"];
$dataInicio = $_POST["dataInicio"];
$dataFinal = $_POST["dataFinal"];
$horaInicio = $_POST["horaInicio"];
$horaFinal = $_POST["horaFinal"];
$coordenador = $_POST["coordenador"];
$TipoProcessoSeletivo = $_POST["TipoProcessoSeletivo"]; 
$idCurso = $_POST["select_curso"];





$sql = "INSERT INTO processoseletivo (nomeProcesso,descricao,dataInicio,dataFinal,horaInicio,horaFinal,idTipoProcesso,idProfessor,idCurso) 
VALUES ('$nomeProcesso','$descricao','$dataInicio','$dataFinal','$horaInicio','$horaFinal','$TipoProcessoSeletivo','$coordenador','$idCurso')";




   

   
  

if ($con->query($sql) === TRUE){

	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroProcessoSeletivo.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>
