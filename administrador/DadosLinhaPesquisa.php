<?php
include_once ("MenuProfessor.php");

?>

<?php
include "../DAO/conexao.php";

$idLinhaPesquisa=$_GET['idLinhaPesquisa'];
$sql = "SELECT * FROM linhadepesquisa WHERE idLinhaPesquisa = '$idLinhaPesquisa' " ;

$res = $con-> query($sql);
$linha = $res->fetch_assoc();

$result_consultaCurso= "SELECT * FROM curso ";
$resultado_consultaCurso = mysqli_query($con, $result_consultaCurso);



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
          <h2>Cadastro Linha de Pesquisa </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarLinhaPesquisa.php?" method="POST" class="form-horizontal form-label-left">
            <span class="section">Alterar</span>

           
      <input type="hidden" readonly class="form-control col-md-7 col-xs-12" id="staticEmail" name="codigo" value="<?php echo $linha['idLinhaPesquisa']; ?>">
    

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nome" required="required" value="<?php echo $linha['nomePesquisa']; ?>"type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="descricao" maxlength="250" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $linha['descricao']?>">
              </div>
            </div>
         
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Curso
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="select_curso">
        
  <option>Selecione o curso</option>
              
  <?php while($rows_consultaCurso = mysqli_fetch_assoc($resultado_consultaCurso)){ ?>

<option value="<?php echo $rows_consultaCurso['idCurso'];?>" <?php if ($linha['idCurso']==$rows_consultaCurso['idCurso']){ echo "selected";}?>  >
<?php echo utf8_encode ($rows_consultaCurso['nomeCurso']);?></option>

<?php } ?>	

</select>
                  </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                   
        
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='ConsultarLinhaPesquisa.php'" value="Cancelar">
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
