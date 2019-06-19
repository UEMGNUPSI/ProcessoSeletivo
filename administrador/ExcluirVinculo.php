<?php

include_once "../DAO/conexao.php";

$idVinculo=$_GET['idVinculo'];

$sql = "DELETE FROM vinculo where idVinculo = '$idVinculo' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro excluido com sucesso!');window.location='ConsultarVinculo.php'</script>";
} else {
	echo "Erro para excluir: " . $con->error; 
}
$con->close();
?>