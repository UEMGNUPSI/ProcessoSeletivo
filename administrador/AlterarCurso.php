
<?php

include_once "../DAO/conexao.php";
$idCurso=$_POST["idCurso"];
$nomeCurso = $_POST["nomeCurso"];



$sql = "UPDATE curso set nomeCurso ='$nomeCurso' where idCurso = '$idCurso' "; 



if($con->query($sql)=== true){
echo "<script>alert('Cadastro alterado com sucesso!');window.location='ConsultarCurso.php'</script>";
} else {
	echo "Erro para inserir: " . $con->error; 
}
$con->close();
?>