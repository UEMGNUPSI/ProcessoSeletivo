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
      
<div class="title_left">
                <h3>Consulta Curso</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar por...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
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
		<td><?php echo utf8_encode ($rows_consultaCurso['nomeCurso']);?></td>
	
<td>
     <?php  echo "<a class='btn btn-success'  href='DadosCurso.php?idCurso=" .$rows_consultaCurso['idCurso'] .  "'>Editar</a>";  ?>
    <?php  echo "<a class='btn btn-danger' href='ExcluirCurso.php?idCurso=" .$rows_consultaCurso['idCurso']. "'> Excluir</a>";  ?>
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
