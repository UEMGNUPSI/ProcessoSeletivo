<?php

include_once "../DAO/conexao.php";
$idCurso=$_GET['idCurso'];

$sql = "DELETE FROM curso where idCurso = '$idCurso' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro excluido com sucesso!');window.location='ConsultarCurso.php'</script>";
} else {
	echo "Erro para excluir: " . $con->error; 
}
$con->close();
?>