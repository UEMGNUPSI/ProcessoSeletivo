<?php include_once("../DAO/conexao.php");

	$id_linhapesquisa1 = $_REQUEST['id_linhapesquisa1'];
	
	$result_orientador1 = "SELECT P.nomeProfessor,V.idProfessor
     FROM vinculo V, professor P WHERE V.idLinhaPesquisa=$id_linhapesquisa1 and V.idProfessor = P.idProfessor";
	$resultado_orientador1 = mysqli_query($con, $result_orientador1);
	
	while ($row_orientador1 = mysqli_fetch_assoc($resultado_orientador1) ) {
		$orientadores[] = array(
			'idProfessor'	=> $row_orientador1['idProfessor'],
			'nomeProfessor' => $row_orientador1['nomeProfessor'],
		);
	}
	
	echo(json_encode($orientadores));