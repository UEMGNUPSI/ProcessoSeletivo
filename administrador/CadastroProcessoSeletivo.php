<?php

include_once("MenuProfessor.php");
include_once("../DAO/conexao.php");
$result_curso ="SELECT * FROM curso";
$resultado_curso= mysqli_query($con, $result_curso);
?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

  <div class="x_panel">
    <div class="x_title">
      <h2>Cadastro Processo Seletivo </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <form action="EnvioProcessoSeletivo.php" method="POST" onsubmit="return(verifica())"
        class="form-horizontal form-label-left">
        <span class="section">Dados Processo Seletivo</span>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nomeProcesso" required="required"
              type="text">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Descricao
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" maxlength="250" name="descricao" required="required"
              type="text">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12">Data Inicio
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="date" name="dataInicio" maxlength="20" class="form-control col-md-7 col-xs-12"
              required="required">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dataFinal">Data Final
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" maxlength="20" name="dataFinal" type="date"
              required="required">
          </div>
        </div>





        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaInicio">Hora Inicio
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" maxlength="15" name="horaInicio" type="time">
          </div>
        </div>

        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="horaFinal">Hora Final
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" name="horaFinal" maxlength="50" type="time">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="coodernador">Coodernador
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input class="form-control col-md-7 col-xs-12" name="coordenador" maxlength="50" type="text">
          </div>
        </div>
        <div class="item form-group">
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Curso
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id=selectTipoPerfil name="select_curso">

                <option>Selecione o curso</option>

                <?php while($rows_curso = mysqli_fetch_assoc($resultado_curso)){ ?>

                <option value="<?php echo $rows_curso['idCurso'];?>">
                  <?php echo utf8_encode ($rows_curso['nomeCurso']);?></option>

                <?php } ?>

              </select>
            </div>
          </div>
                </div>


          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <input type="button" name="cancelar" class="btn btn-primary"
                onClick="window.location.href='IndexProfessor.php'" value="Cancelar">
              <input type="submit" name="enviar" class="btn btn-success" value="Enviar">
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