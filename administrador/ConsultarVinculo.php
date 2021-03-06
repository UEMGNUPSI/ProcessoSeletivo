<?php
include_once("MenuProfessor.php");

?>

<?php
	include "../DAO/conexao.php";

      
$result_consultaVinculo="SELECT V.idVinculo,
P.nomeProfessor ,
L.nomePesquisa
FROM linhadepesquisa L, professor P, vinculo V 
WHERE V.idProfessor = P.idProfessor and
V.idLinhaPesquisa = L.idLinhaPesquisa  ";
$resultado_consultaVinculo = mysqli_query($con, $result_consultaVinculo);

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
      
                <h3><center>Consulta Vinculo</center></h3>

           
            </div>

            <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th scope="col">Professor</th>
                        <th scope="col">Linha de Pesquisa</th>
                        <th scope="col"></th>
                         </tr>
                       </thead>   

<tbody>
	<?php while($rows_consultaVinculo  = mysqli_fetch_assoc($resultado_consultaVinculo )){ 
        ?>
    <tr>
		<td><?php echo $rows_consultaVinculo['nomeProfessor'];?></td>
		<td><?php echo $rows_consultaVinculo['nomePesquisa'];?></td>
       
	<td>
     <?php  echo "<a class='btn btn-success'  href='DadosVinculo.php?idVinculo=" .$rows_consultaVinculo['idVinculo'] .  "'>Editar</a>";  ?>
    <?php  echo "<a  class='btn btn-danger' href='ExcluirVinculo.php?idVinculo=" .$rows_consultaVinculo['idVinculo']. "'onclick=\"return confirm('Tem certeza que deseja deletar esse registro?');\"> Excluir</a>";  ?>
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
