<?php 
if (isset($_POST["user"])){
    include_once "../DAO/conexao.php";

    $resultado = '';
	
	$query_user = "SELECT * FROM processoseletivo WHERE idProcessoSeletivo = '" . $_POST["user"] . "' LIMIT 1";
	$resultado_user = mysqli_query($conn, $query_user);
	$row_user = mysqli_fetch_assoc($resultado_user);
	
	$resultado .= '<dl class="row">';
	
	$resultado .= '<dt class="col-sm-3">ID</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['idProcessoSeletivo'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">Nome</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['nomeProcesso'].'</dd>';
	
	$resultado .= '<dt class="col-sm-3">Descriçao</dt>';
	$resultado .= '<dd class="col-sm-9">'.$row_user['descricao'].'</dd>';
		
	$resultado .= '</dl>';
	
	echo $resultado;
}
?>