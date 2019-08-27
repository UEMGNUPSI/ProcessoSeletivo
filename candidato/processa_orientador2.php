<?php include_once("../DAO/conexao.php");

	$id_linhapesquisa2 = $_REQUEST['id_linhapesquisa2'];
	
	$result_orientador2 = "SELECT P.nomeProfessor,V.idProfessor
     FROM vinculo V, professor P WHERE V.idLinhaPesquisa=$id_linhapesquisa2 and V.idProfessor = P.idProfessor";
	$resultado_orientador2 = mysqli_query($con, $result_orientador2);
	
	while ($row_orientador2 = mysqli_fetch_assoc($resultado_orientador2) ) {
		$orientadores[] = array(
			'idProfessor'	=> $row_orientador2['idProfessor'],
			'nomeProfessor' => $row_orientador2['nomeProfessor'],
		);
	}
	
	echo(json_encode($orientadores));