<?php
include_once ("MenuProfessor.php");

?>

<?php
include "../DAO/conexao.php";

$idProcessoSeletivo=$_GET['idProcessoSeletivo'];
$sql = "SELECT * FROM processoSeletivo WHERE idProcessoSeletivo = $idProcessoSeletivo " ;


$result_curso ="SELECT * FROM curso";
$resultado_curso= mysqli_query($con, $result_curso);

$res = $con-> query($sql);
$linha = $res->fetch_assoc();


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
          <h2>Cadastro Processo Seletivo </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarProcesso.php?" method="POST" class="form-horizontal form-label-left">
            <span class="section">Dados </span>

          
      
      <input type="hidden" readonly class="form-control col-md-7 col-xs-12"  name="idProcessoSeletivo" value="<?php echo $linha['idProcessoSeletivo']; ?>">
    


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome Processo 
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nomeProcesso" required="required" value="<?php echo $linha['nomeProcesso']; ?>"type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="descricao" maxlength="20" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $linha['descricao']?>" >
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="data">Data Início
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="20"name="dataInicio" type="date" required="required" value="<?php echo $linha['dataInicio']?>"  >
              </div>
            </div>
  


            

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataFinal">Data Final
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="15" name="dataFinal" value="<?php echo $linha['dataFinal']?>"type="date">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaInicial">Hora Inícial
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="horaInicio" value="<?php echo $linha['horaInicio']?>" maxlength="50" type="time">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade">Hora Final
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="horaFinal" maxlength="50" value="<?php echo $linha['horaFinal']?>" type="time">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="coordenador">Coordenador
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50"name="coordenador" value="<?php echo $linha['coordenador']?>" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Curso
              </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="select_Curso" required="required">
        
              
  <?php while($rows_curso = mysqli_fetch_assoc($resultado_curso)){ ?>

<option value="<?php echo $rows_curso['idCurso'];?>"<?php if ($linha['idCurso']==$rows_curso['idCurso']){ echo "selected";}?>
 ><?php echo utf8_encode ($rows_curso['nomeCurso']);?></option>

<?php } ?>	

</select>
</div>
            </div>

            

            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                   
        
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='ConsultarProcessoSeletivo.php'" value="Cancelar">
                <input type="submit" name="Enviar" class="btn btn-success"  value="Alterar">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

</body>

</html>

<?php
include_once("FooterProfessor.php");

?>
