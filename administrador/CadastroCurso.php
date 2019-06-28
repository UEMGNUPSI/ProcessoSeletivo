<?php
include_once("MenuProfessor.php");

?>
      <div class="x_panel">
        <div class="x_title">
          <h1><center>Cadastro Curso</center> </h1>
         
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="EnvioCurso.php" method="POST" onsubmit="return(verifica())" class="form-horizontal form-label-left">
            <span class="section">Dados</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome do curso
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50" name="nome" required="required" type="text">
              </div>
            </div>
    
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='IndexProfessor.php'" value="Cancelar">
                <input type="submit" name="enviar" class="btn btn-success"  value="Salvar">
              </div>
            </div>

            </form>
      </div>
      </div>
    </div>


<?php
include_once("FooterProfessor.php");

?>