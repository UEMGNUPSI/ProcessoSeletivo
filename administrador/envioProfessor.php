<?php

include_once "../DAO/conexao.php";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$rg = $_POST["rg"];
$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$telefone = $_POST["telefone"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = $_POST["acesso"];


if ($acesso==1){
$sql = "INSERT INTO professor (nome,cpf,rg,cep,estado,cidade,bairro,endereco,numero,
complemento,telefone,celular,email,senha,perfilUsuario) 
VALUES ('$nome','$cpf','$rg','$cep','$estado','$cidade','$bairro','$endereco','$numero'
,'$complemento','$telefone','$celular','$email','$senha','$acesso')";

}

else if ($acesso==2){

$sql = "INSERT INTO professor (nome,cpf,rg,cep,estado,cidade,bairro,endereco,numero,
  complemento,telefone,celular,email,senha,perfilUsuario) 
    VALUES ('$nome','$cpf','$rg','$cep','$estado','$cidade','$bairro','$endereco','$numero'
   ,'$complemento','$telefone','$celular','$email','$senha','$acesso')";
   
}
   
  

if ($con->query($sql) === TRUE){

	echo "<script>alert('Cadastro realizado com sucesso!');window.location='CadastroProfessor.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>
