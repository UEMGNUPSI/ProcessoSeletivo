<?php
include_once("MenuProfessor.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

<script>
function validaSenha (input){ 
    if (input.value != document.getElementById('senha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 

</script>

</head>

<body>

<div class="x_panel">
        <div class="x_title">
          <h1> <center> Cadastro Professor </center> </h1>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="EnvioProfessor.php" method="POST"  onsubmit="return(verifica())" class="form-horizontal form-label-left">
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
                <input class="form-control col-md-7 col-xs-12" maxlength="20"name="rg" type="text" required="required"  >
              </div>
            </div>
  


            <span class="section">Endereço</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="15" name="cep" type="text" onkeyup="mascara('##.###-###',this,event,true)">
              </div>
            </div>

  
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="estado">
                <option >Selecione seu estado</option>
                  <option value="Acre">Acre</option>
                  <option value="Alagoas">Alagoas</option>
                  <option value="Amapá">Amapá</option>
                  <option value="Amazonas">Amazonas</option>
                  <option value="Bahia">Bahia</option>
                  <option value="Ceará">Ceará</option>
                  <option value="Distrito Federal">Distrito Federal</option>
                  <option value="Espírito Santo">Espírito Santo</option>
                  <option value="Goiás">Goiás</option>
                  <option value="Maranhão">Maranhão</option>
                  <option value="Mato Grosso">Mato Grosso</option>
                  <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                  <option value="Minas Gerais">Minas Gerais</option>
                  <option value="Pará">Pará</option>
                  <option value="Paraná">Paraná</option>
                  <option value="Pernambuco">Pernambuco</option>
                  <option value="Piauí">Piauí</option>
                  <option value="Rio de Janeiro">Rio de Janeiro</option>
                  <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                  <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                  <option value="Rondônia">Rondônia</option>
                  <option value="Roraima">Roraima</option>
                  <option value="Santa Catarina">Santa Catarina</option>
                  <option value="São Paulo">São Paulo</option>
                  <option value="Sergipe">Sergipe</option>
                  <option value="Tocantins">Tocantins</option>




                </select>
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
                <input type="password" id="senha" name="senha" maxlength="255" class="form-control col-md-7 col-xs-12" required="required">
              </div>
            </div>

            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Confirma a senha
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="senha_confirma" maxlength="255" class="form-control col-md-7 col-xs-12" required="required" oninput="validaSenha(this)" >
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
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='IndexProfessor.php'" value="Cancelar">
                <input type="submit" name="salvar" class="btn btn-success"   value="Salvar">
              </div>
            </div>
<br>
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