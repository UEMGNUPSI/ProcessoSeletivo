<?php
include_once("MenuProfessor.php");

?>

<?php
	include "../DAO/conexao.php";

      
$result_consultaLinhaPesquisa="SELECT L.idLinhaPesquisa,
L.nomePesquisa, 
L.descricao ,
C.nomeCurso 
FROM linhadepesquisa L, curso C 
WHERE L.idCurso = C.idCurso  ";
$resultado_consultaLinhaPesquisa = mysqli_query($con, $result_consultaLinhaPesquisa);

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
                <h3>Consulta Linha de Pesquisa</h3>
              </div>

          
            </div>

            <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Curso</th>
                        <th scope="col"></th>
                         </tr>
                       </thead>   

<tbody>
	<?php while($rows_consultaLinhaPesquisa = mysqli_fetch_assoc($resultado_consultaLinhaPesquisa)){ 
        ?>
    <tr>
		<td><?php echo $rows_consultaLinhaPesquisa['nomePesquisa'];?></td>
		<td><?php echo $rows_consultaLinhaPesquisa['descricao'];?></td>
		<td><?php echo utf8_encode($rows_consultaLinhaPesquisa['nomeCurso']);?></td>
       
	<td>
     <?php  echo "<a class='btn btn-success'  href='DadosLinhaPesquisa.php?idLinhaPesquisa=" .$rows_consultaLinhaPesquisa['idLinhaPesquisa'] .  "'>Editar</a>";  ?>
    <?php  echo "<a  class='btn btn-danger' href='ExcluirLinhaPesquisa.php?idLinhaPesquisa=" .$rows_consultaLinhaPesquisa['idLinhaPesquisa']. "'> Excluir</a>";  ?>
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
