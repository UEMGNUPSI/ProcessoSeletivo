<?php
include_once("MenuProfessor.php");

?>

<?php
    include "../DAO/conexao.php";


 
$result_consultaProcesso="SELECT PC.idProcessoSeletivo,PC.nomeProcesso, PC.descricao, PC.dataInicio, PC.dataFinal, PC.horaInicio, P.nomeProfessor, C.nomeCurso 
FROM processoseletivo PC, curso C, Professor P
WHERE PC.idProfessor = P.idProfessor and PC.idCurso = C.idCurso ";
$resultado_consultaProcesso = mysqli_query($con, $result_consultaProcesso);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
         <!-- Datatables -->
   <!-- <link href="../CSS/tables/dataTables.bootstrap.min.css" rel="stylesheet"> -->
    <link href="../CSS/tables/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/tables/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/tables/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/tables/scroller.bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="column content">
      
                <h3><center>Consulta Processo Seletivo</center></h3>
            
            </div>

            <div class="x_content">
                  <table  id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th scope="col">Processo Seletivo</th>
                        <th scope="col">Data Início</th>
                        <th scope="col">Data Final</th>
                        <th scope="col">Coordenador</th>
                        <th scope="col">Curso</th>
                        
                        <th></th>
                       </thead>   

<tbody>
	<?php while($rows_consultaProcesso = mysqli_fetch_assoc($resultado_consultaProcesso)){ 
        ?>
    <tr>
		<td><?php echo $rows_consultaProcesso['nomeProcesso'];?></td>
    
		<td><?php echo $rows_consultaProcesso['dataInicio'];?></td>
    <td><?php echo $rows_consultaProcesso['dataFinal'];?></td>
		<td><?php echo $rows_consultaProcesso['nomeProfessor'];?></td>
  	<td><?php echo $rows_consultaProcesso['nomeCurso'];?></td>
	
<td>
     <?php  echo "<a class='btn btn-success'  href='DadosProcesso.php?idProcessoSeletivo=" .$rows_consultaProcesso['idProcessoSeletivo'] .  "'>Editar</a>";  ?>
    <?php  echo "<a class='btn btn-danger' href='ExcluirProcesso.php?idProcessoSeletivo=" .$rows_consultaProcesso['idProcessoSeletivo']. "' onclick=\"return confirm('Tem certeza que deseja deletar esse registro?');\"> Excluir</a>";  ?>
	</td>
	</tr>

<?php } ?>
</tbody>

	</table>
    </div>


    
 <!-- Datatables -->
    <script src="../JS/tables/jquery.dataTables.min.js"></script>
    <script src="../JS/tables/dataTables.bootstrap.min.js"></script>
    <script src="../JS/tables/dataTables.buttons.min.js"></script>
    <script src="../JS/tables/buttons.bootstrap.min.js"></script>
    <script src="../JS/tables/buttons.flash.min.js"></script>
    <script src="../JS/tables/buttons.html5.min.js"></script>
    <script src="../JS/tables/dataTables.fixedHeader.min.js"></script>
    <script src="../JS/tables/dataTables.keyTable.min.js"></script>
    <script src="../JS/tables/dataTables.responsive.min.js"></script>
    <script src="../JS/tables/responsive.bootstrap.js"></script>
    <script src="../JS/tables/dataTables.scroller.min.js"></script>

</body>
</html>
<?php
include_once("FooterProfessor.php");

?>
