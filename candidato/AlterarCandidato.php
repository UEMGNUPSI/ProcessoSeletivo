<?php

include_once "../DAO/conexao.php";
$idCandidato=$_POST["codigo"];
$nome = $_POST["nome"];
$cpf =  $_POST["cpf"];
$rg =  $_POST["rg"];
$filiacao =  $_POST["filiacao"];
$orgaoExp = $_POST["orgaoExp"];
$email = $_POST["email"];
$senha =  $_POST["senha"];
$nacionalidade =  $_POST["nacionalidade"];
$naturalidade =  $_POST["naturalidade"];
$etnia =  $_POST["etnia"];
$sexo =  $_POST["sexo"];
$estadoCivil =  $_POST["estadoCivil"];
$dataNascimento =  $_POST["dtNascimento"];
 $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);


$sql = "UPDATE Candidato set nome ='$nome', cpf='$cpf' , rg='$rg' , filiacao='$filiacao' , orgaoExp='$orgaoExp',email='$email',
senha='$senhaSegura', nacionalidade='$nacionalidade',naturalidade='$naturalidade',
etnia='$etnia',sexo='$sexo',estadoCivil='$estadoCivil',dtNascimento='$dataNascimento' where idCandidato = '$idCandidato' "; 

die();

if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='IndexCandidato.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>