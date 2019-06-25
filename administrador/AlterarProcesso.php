
<?php

include_once "../DAO/conexao.php";
$idProcessoSeletivo = $_POST["idProcessoSeletivo"];
$nomeProcesso = $_POST["nomeProcesso"];
$descricao = $_POST["descricao"];
$dataInicio = $_POST["dataInicio"];
$dataFinal = $_POST["dataFinal"];
$horaInicio = $_POST["horaInicio"];
$horaFinal = $_POST["horaFinal"];
$coordenador = $_POST["coordenador"];
$selectCurso = $_POST["select_Curso"];



$sql = "UPDATE processoseletivo set nomeProcesso ='$nomeProcesso', descricao ='$descricao', dataInicio ='$dataInicio', dataFinal ='$dataFinal', 
horaInicio ='$horaInicio', horaFinal ='$horaFinal', coordenador ='$coordenador', idCurso = $selectCurso where idProcessoSeletivo = $idProcessoSeletivo "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='ConsultarProcessoSeletivo.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>