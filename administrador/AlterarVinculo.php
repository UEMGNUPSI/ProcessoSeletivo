<?php

include_once "../DAO/conexao.php";
$idVinculo=$_POST["codigo"];
$idProfessor = $_POST["select_professor"];
$idLinhaPesquisa = $_POST["select_pesquisa"];




$sql = "UPDATE vinculo set idProfessor =$idProfessor,idLinhaPesquisa=$idLinhaPesquisa  where idVinculo= '$idVinculo' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='ConsultarVinculo.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>