<?php
include_once ("MenuProfessor.php");

?>

<?php
include "../DAO/conexao.php";

$idCurso=$_GET['idCurso'];
$sql = "SELECT * FROM curso WHERE idCurso = '$idCurso' " ;



$res = $con-> query($sql);
$linha = $res->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

      <div class="x_panel">
        <div class="x_title">
          <h2>Cadastro Curso </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarCurso.php?" method="POST" class="form-horizontal form-label-left">
            <span class="section">Nome do Curso</span>

          
      
      <input type="hidden" readonly class="form-control col-md-7 col-xs-12" id="staticEmail" name="idCurso" value="<?php echo $linha['idCurso']; ?>">
    


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nomeCurso" required="required" value="<?php echo  utf8_encode ($linha['nomeCurso']); ?>"type="text">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                   
        
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='ConsultarCurso.php'" value="Cancelar">
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
