<?php
include_once("MenuProfessor.php");

include_once("../DAO/conexao.php");
$result_professor ="SELECT * FROM professor";
$resultado_professor= mysqli_query($con, $result_professor);

$result_linhaPesquisa ="SELECT * FROM linhadepesquisa";
$resultado_linhaPesquisa= mysqli_query($con, $result_linhaPesquisa);

?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Vinculo </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="EnvioVinculo.php" method="POST"  class="form-horizontal form-label-left"> 
 
         
          <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="professor">Professor
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectProfessor name="select_professor">
        
  <option>Selecione o professor</option>
              
  <?php while($rows_professor = mysqli_fetch_assoc($resultado_professor)){ ?>

<option value="<?php echo $rows_professor['idProfessor'];?>"><?php echo  ($rows_professor['nomeProfessor']);?></option>

<?php } ?>	

</select>
                  </div>
            </div>


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="professor">Linha de Pesquisa
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectlinhapesquisa name="select_linhapesquisa">
        
  <option>Selecione a linha de pesquisa</option>
              
  <?php while($rows_linhaPesquisa = mysqli_fetch_assoc($resultado_linhaPesquisa)){ ?>

<option value="<?php echo $rows_linhaPesquisa['idLinhaPesquisa'];?>"><?php echo  ($rows_linhaPesquisa['nomePesquisa']);?></option>

<?php } ?>	

</select>
                  </div>
            </div>


 
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='IndexProfessor.php'" value="Cancelar">
                <input type="submit" name="enviar" class="btn btn-success"  value="Enviar">
              </div>
            </div>  

                          
         </form>
        </div>
      </div>
    </div>

                               <script src="../JS/mascaras.js"></script>
</body>

</html>

<?php
include_once("FooterProfessor.php");

?>