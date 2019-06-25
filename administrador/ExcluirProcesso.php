<?php

include_once "../DAO/conexao.php";
$idProcessoSeletivo = $_GET['idProcessoSeletivo'];

$sql = "DELETE FROM processoseletivo where idProcessoSeletivo = '$idProcessoSeletivo' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro excluido com sucesso!');window.location='ConsultarProcessoSeletivo.php'</script>";
} else {
	echo "Erro para excluir: " . $con->error; 
}
$con->close();
?>