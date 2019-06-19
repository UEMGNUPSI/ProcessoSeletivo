<?php

include_once "../DAO/conexao.php";
$idLinhaPesquisa=$_GET['idLinhaPesquisa'];

$sql = "DELETE FROM linhadepesquisa where idLinhaPesquisa = '$idLinhaPesquisa' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro excluido com sucesso!');window.location='ConsultarLinhaPesquisa.php'</script>";
} else {
	echo "Erro para excluir: " . $con->error; 
}
$con->close();
?>