<?php

include_once "../DAO/conexao.php";
$idLinhaPesquisa=$_POST["codigo"];
$nome = $_POST["nome"];
$descricao =  $_POST["descricao"];
$idCurso = $_POST["select_curso"];




$sql = "UPDATE linhadepesquisa set nome ='$nome', descricao='$descricao' , idCurso=$idCurso  where idLinhaPesquisa= '$idLinhaPesquisa' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='ConsultarLinhaPesquisa.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>