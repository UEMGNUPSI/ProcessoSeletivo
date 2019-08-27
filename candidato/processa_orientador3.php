<?php include_once("../DAO/conexao.php");

	$id_linhapesquisa3= $_REQUEST['id_linhapesquisa3'];
	
	$result_orientador3 = "SELECT P.nomeProfessor,V.idProfessor
     FROM vinculo V, professor P WHERE V.idLinhaPesquisa=$id_linhapesquisa3 and V.idProfessor = P.idProfessor";
	$resultado_orientador3 = mysqli_query($con, $result_orientador3);
	
	while ($row_orientador3 = mysqli_fetch_assoc($resultado_orientador3) ) {
		$orientadores[] = array(
			'idProfessor'	=> $row_orientador3['idProfessor'],
			'nomeProfessor' => $row_orientador3['nomeProfessor'],
		);
	}
	
	echo(json_encode($orientadores));