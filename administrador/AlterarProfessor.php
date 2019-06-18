
<?php

include_once "../DAO/conexao.php";
$idProfessor=$_POST["codigo"];
$nome = $_POST["nome"];
$cpf =  $_POST["cpf"];
$rg =  $_POST["rg"];
$cep =  $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro =  $_POST["bairro"];
$endereco =  $_POST["endereco"];
$numero =  $_POST["numero"];
$complemento =  $_POST["complemento"];
$telefone =  $_POST["telefone"];
$celular =  $_POST["celular"];
$email =  $_POST["email"];
$senha = $_POST["senha"];
$acesso =  $_POST["acesso"];


$sql = "UPDATE Professor set nome ='$nome', cpf='$cpf' , rg='$rg' , cep='$cep' , estado='$estado',cidade='$cidade',
bairro='$bairro',endereco='$endereco',numero='$numero',
complemento='$complemento',telefone='$telefone',celular='$celular',email='$email',senha='$senha',perfilUsuario='$acesso' where idProfessor = '$idProfessor' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='ConsultarProfessor.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>