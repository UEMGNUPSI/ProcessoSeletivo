<?php

include_once "../DAO/conexao.php";

$idCandidato = $_POST["idCandidato"];
$idProcessoSeletivo = $_POST["idProcessoSeletivo"];


$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["selectEstado"];
$cep = $_POST["cep"];
$telCel = $_POST["telCelular"];
$telRes = $_POST["telResidencial"];
$email = $_POST["emailContato"];

$empresaInstituicao = $_POST["empresaInstituicao"];
$funcao = $_POST["funcao"];
$ruaComercial = $_POST["ruaComercial"];
$numeroComercial = $_POST["numeroComercial"];
$complementoComercial = $_POST["complementoComercial"];
$bairroComercial = $_POST["bairroComercial"];
$cidadeComercial = $_POST["cidadeComercial"];
$estadoComercial = $_POST["selectEstadoComercial"];
$cepComercial = $_POST["cepComercial"];
$telComercial = $_POST["telefoneComercial"];
$emailComercial = $_POST["emailComercial"];

$linguaEstrangeira = $_POST["LinguaEstrangeira"];
$canhoto_destro = $_POST["canhoto_destro"];
$localProva = $_POST["localProva"];
$select_linhapesquisa= $_POST["select_linhapesquisa"];
$orientador1 = $_POST["orientador1"];
$orientador2 = $_POST["orientador2"];
$orientador3 = $_POST["orientador3"];

$cursoGraduacao = $_POST["cursoGraduacao"];
$instituicao = $_POST["instituicao"];
$anoConclusao = $_POST["anoConclusao"];
$selectGrauAcademico = $_POST["selectGrauAcademico"];
$cursoGraduacao2 = $_POST["cursoGraduacao2"];
$instituicao2 = $_POST["instituicao2"];
$anoConclusao2 = $_POST["anoConclusao2"];
$selectGrauAcademico2 = $_POST["selectGrauAcademico2"];


$sql = "INSERT INTO mestrado_ca (ruaRes,numeroRes,complementoRes,bairroRes,cidadeRes,estadoRes,cepRes,telCelular,telRes,emailContato,
empresaComercial,funcao,ruaComercial,numeroComercial,complementoComercial,bairroComercial,cidadeComercial,estadoComercial,cepComercial,
telefoneComercial,emailComercial,linguaEstrangeira,canhotoDestro,localProva,idLinhaPesquisa,idOrientador1,idOrientador2,idOrientador3,
cursoGraduacao,instituicao,anoConclusao,grauAcademico,cursoGraduacao2,instituicao2,anoConclusao2,grauAcademico2) 
VALUES ('$rua','$numero','$complemento','$bairro','$cidade','$estado','$cep','$telCel','$telRes','$email','$empresaInstituicao',
'$funcao','$ruaComercial','$numeroComercial','$complementoComercial','$bairroComercial','$cidadeComercial','$estadoComercial',
'$cepComercial','$telComercial','$emailComercial','$linguaEstrangeira','$canhoto_destro','$localProva',$select_linhapesquisa,
$orientador1,$orientador2,$orientador3,'$cursoGraduacao','$instituicao','$anoConclusao','$selectGrauAcademico','$cursoGraduacao2',
'$instituicao2','$anoConclusao2','$selectGrauAcademico2')";


if ($con->query($sql) === TRUE){
	$idMestrado_ca = mysqli_insert_id($con);
	$sql2 = "INSERT INTO inscricao (idProcessoSeletivo,idMestrado_ca,idCandidato)
	values ($idProcessoSeletivo,$idMestrado_ca,$idCandidato)";

	if ($con->query($sql2) === TRUE){ 
	echo "<script>alert('Inscrição realizada com sucesso!');window.location='IndexCandidato.php'</script>";
	}
    else {
		echo "Erro para inserir: " . $con->error; 
	}
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();



?>
