<?php
include_once("MenuCandidato.php");

?>
<?php
   include "../DAO/conexao.php";


 
$result_InscreveProcesso="SELECT S.idProcessoSeletivo,S.nomeProcesso, S.descricao, S.dataInicio, S.dataFinal, S.horaInicio, P.nomeProfessor, C.nomeCurso 
FROM processoseletivo S, curso C, Professor P
WHERE S.idProfessor = P.idProfessor and S.idCurso = C.idCurso ";
$resultado_InscreveProcesso = mysqli_query($con, $result_InscreveProcesso);

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
                        <th scope="col">status</th>
                        
                        
                        <th></th>
                       </thead>   

<tbody>
	<?php while($rows_InscreveProcesso = mysqli_fetch_assoc($resultado_InscreveProcesso)){ 
        ?>
    <tr>
		<td><?php echo $rows_InscreveProcesso['nomeProcesso'];?></td>
    <td></td>
	
	
<td>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $rows_InscreveProcesso['idProcessoSeletivo']; ?>">Mais Informações</button>
<div class="modal fade" id="exampleModal<?php echo $rows_InscreveProcesso['idProcessoSeletivo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Saber Mais</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for=""><?php echo $rows_InscreveProcesso['nomeProcesso'];?></label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecahar</button>
       
      </div>
    </div>
  </div>
</div>
	</td>
	</tr>

<?php } ?>
</tbody>

	</table>
    </div>
    <?php
   
?>
<Script>
$(document).ready(function (){
				$(document).on('click','.view_data', function(){
					var user = $(this).attr("idProcessoSeletivo");
				//	alert(user_id);
				//	Verificar se há valor na variável "user_id".
					if(user !== ''){
						var dados = {
							user: user
						};
						$.post('visualizarProcesso.php', dados, function(retorna){
							//Carregar o conteúdo para o usuário
							$("#visul_usuario").html(retorna);
							$('#visualizarInfo').modal('show'); 
						});
					}
				});
			});
            </Script>
         
         
    
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
include_once("FooterCandidato.php");

?>