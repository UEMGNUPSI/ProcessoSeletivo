<?php

include_once "../DAO/conexao.php";
$idCandidato=$_POST["codigo"];
$nome = $_POST["nome"];

$email = $_POST["email"];
$senha =  $_POST["senha"];

 $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);


$sql = "UPDATE Candidato set nome ='$nome',  email='$email',
senha='$senhaSegura' where idCandidato = '$idCandidato' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='IndexCandidato.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>