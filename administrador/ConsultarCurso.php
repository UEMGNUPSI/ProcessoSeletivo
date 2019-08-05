<?php
include_once("MenuProfessor.php");

?>

<?php
	include "../DAO/conexao.php";

$result_consultaCurso="select * from Curso";
$resultado_consultaCurso = mysqli_query($con, $result_consultaCurso);

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
      
                <h3><center>Consulta Curso</center></h3>

        
            </div>

            <div class="x_content">
                  <table  id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th scope="col">Nome do Curso</th>
                        <th></th>
                       </thead>   

<tbody>
	<?php while($rows_consultaCurso = mysqli_fetch_assoc($resultado_consultaCurso)){ 
        ?>
    <tr>
		<td><?php echo $rows_consultaCurso['nomeCurso'];?></td>
	
<td>
     <?php  echo "<a class='btn btn-success'  href='DadosCurso.php?idCurso=" .$rows_consultaCurso['idCurso'] .  "'>Editar</a>";  ?>
    <?php  echo "<a class='btn btn-danger' href='ExcluirCurso.php?idCurso=" .$rows_consultaCurso['idCurso']. "'onclick=\"return confirm('Tem certeza que deseja deletar esse registro?');\"> Excluir</a>";  ?>
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
