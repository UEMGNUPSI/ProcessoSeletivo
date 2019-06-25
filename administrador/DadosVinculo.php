<?php
include_once ("MenuProfessor.php");

?>

<?php
include "../DAO/conexao.php";

$idVinculo=$_GET['idVinculo'];
$sql = "SELECT * FROM vinculo WHERE idVinculo = '$idVinculo' " ;

$res = $con-> query($sql);
$linha = $res->fetch_assoc();

$result_consultaProfessor= "SELECT idProfessor,nomeProfessor FROM Professor ";
$resultado_consultaProfessor = mysqli_query($con, $result_consultaProfessor);

$result_consultaPesquisa= "SELECT idLinhaPesquisa,nomePesquisa FROM Linhadepesquisa ";
$resultado_consultaPesquisa = mysqli_query($con, $result_consultaPesquisa);

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
          <h2>Cadastro Vinculo </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarVinculo.php?" method="POST" class="form-horizontal form-label-left">
            <span class="section">Alterar</span>

           
      <input type="hidden" readonly class="form-control col-md-7 col-xs-12" id="staticEmail" name="codigo" value="<?php echo $linha['idVinculo']; ?>">
    
         
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Professor
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="select_professor">
        
              
  <?php while($rows_consultaProfessor = mysqli_fetch_assoc($resultado_consultaProfessor)){ ?>

<option value="<?php echo $rows_consultaProfessor['idProfessor'];?>" <?php if ($linha['idProfessor']==$rows_consultaProfessor['idProfessor']){ echo "selected";}?> ><?php echo ($rows_consultaProfessor['nomeProfessor']);?></option>

<?php } ?>	

</select>
                  </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="LinhaPesquisa">Linha de Pesquisa
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="select_pesquisa">
        
              
  <?php while($rows_consultaPesquisa = mysqli_fetch_assoc($resultado_consultaPesquisa)){ ?>

<option value="<?php echo $rows_consultaPesquisa['idLinhaPesquisa'];?>"<?php if ($linha['idLinhaPesquisa']==$rows_consultaPesquisa['idLinhaPesquisa']){ echo "selected";}?> >
<?php echo ($rows_consultaPesquisa['nomePesquisa']);?></option>

<?php } ?>	

</select>
                  </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                   
        
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='ConsultarVinculo.php'" value="Cancelar">
                <input type="submit" name="Enviar" class="btn btn-success"  value="Alterar">
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
