<?php

include_once "../DAO/conexao.php";
$idProfessor=$_GET['idProfessor'];

$sql = "DELETE FROM Professor where idProfessor = '$idProfessor' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro excluido com sucesso!');window.location='ConsultarProfessor.php'</script>";
} else {
	echo "Erro para excluir: " . $con->error; 
}
$con->close();
?>