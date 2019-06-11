<?php
include_once("MenuProfessor.php");

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
          <h2>Cadastro Professor </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="envioProfessor.php" method="POST" onsubmit="return(verifica())" class="form-horizontal form-label-left">
            <span class="section">Dados Pessoais</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nome" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="cpf" maxlength="20" class="form-control col-md-7 col-xs-12" required="required" onkeyup="mascara('###.###.###-##',this,event,true)">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rg">RG
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="20"name="rg" type="text" required="required"  onkeyup="mascara('##.###.###-#',this,event,true)">
              </div>
            </div>
  


            <span class="section">Endereço</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="15" name="cep" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="estado" maxlength="50" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade">Cidade
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="cidade" maxlength="50" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50"name="bairro" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">Endereço
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50" name="endereco" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Número
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="numero" maxlength="10"  type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Complemento">Complemento
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="complemento" maxlength="50" type="text">
              </div>
            </div>



            <span class="section">Contato</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefone
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="telefone" maxlength="15" class="form-control col-md-7 col-xs-12" onkeyup="mascara('(##)####-####',this,event,true)">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Celular
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="celular" maxlength="15" class="form-control col-md-7 col-xs-12" required="required" onkeyup="mascara('(##)#####-####',this,event,true)">
              </div>
            </div>



            <span class="section">Informações de Acesso</span>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="email" maxlength="250"  onblur="checarEmail();" type="text" required="required" >
              </div>
            </div>

            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Senha
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="senha" maxlength="50" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Acesso
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="acesso">
                  <option value="1">Professor</option>
                  <option value="2">Professor Administrador</option>
                </select>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <input type="button" name="cancelar" class="btn btn-primary" value="Cancelar">
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