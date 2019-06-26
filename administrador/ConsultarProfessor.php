<?php
include_once("MenuProfessor.php");

?>

<?php
	include "../DAO/conexao.php";

$result_consultaProf="select * from Professor";
$resultado_consultaProf = mysqli_query($con, $result_consultaProf);

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
                <h3>Consulta Professores</h3>
              </div>

        
            </div>

            <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Perfil</th>
                        <th scope="col"></th>
                         </tr>
                       </thead>   

<tbody>
	<?php while($rows_consultaProf = mysqli_fetch_assoc($resultado_consultaProf)){ 
        ?>
    <tr>
		<td><?php echo $rows_consultaProf['nomeProfessor'];?></td>
		<td><?php echo $rows_consultaProf['cpf'];?></td>
		<td><?php echo $rows_consultaProf['email'];?></td>
        <td><?php if ($rows_consultaProf['perfilUsuario'] == 1){
            echo "Professor ";}
            else {echo "Professor Administrador";} ?></td>
		<td>

     <?php  echo "<a class='btn btn-success'  href='DadosProfessor.php?idProfessor=" .$rows_consultaProf['idProfessor'] .  "'>Editar</a>";  ?>
    <?php  echo "<a  class='btn btn-danger' href='ExcluirProfessor.php?idProfessor=" .$rows_consultaProf['idProfessor']. "'> Excluir</a>";  ?>
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
