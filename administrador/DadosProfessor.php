<?php
include_once ("MenuProfessor.php");

?>

<?php
include "../DAO/conexao.php";

$idProfessor=$_GET['idProfessor'];
$sql = "SELECT * FROM Professor WHERE idProfessor = '$idProfessor' " ;



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
 
          <form action="AlterarProfessor.php?" method="POST" onsubmit="return(verifica())" class="form-horizontal form-label-left">
            <span class="section">Dados Pessoais</span>

          
      <input type="hidden" name="codigo" value="<?php echo $linha['idProfessor']; ?>">


            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nome" required="required" value="<?php echo $linha['nomeProfessor']; ?>"type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="cpf" maxlength="20" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $linha['cpf']?>" onkeyup="mascara('###.###.###-##',this,event,true)">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rg">RG
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="20"name="rg" type="text" required="required" value="<?php echo $linha['rg']?>"  onkeyup="mascara('##.###.###-#',this,event,true)">
              </div>
            </div>
  


            <span class="section">Endereço</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cep">CEP
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="15" name="cep" value="<?php echo $linha['cep']?>"type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="estado">Estado
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="estado">
                <option value= "<?php echo $linha['estado'];?>"><?php echo $linha['estado'];?></option>
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
                <input class="form-control col-md-7 col-xs-12" name="cidade" maxlength="50" value="<?php echo $linha['cidade']?>" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bairro">Bairro
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50"name="bairro" value="<?php echo $linha['bairro']?>" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">Endereço
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" maxlength="50" name="endereco" value="<?php echo $linha['endereco']?>" type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="numero">Número
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="numero" maxlength="10" value="<?php echo $linha['numero']?>"  type="text">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Complemento">Complemento
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="complemento" maxlength="50" value="<?php echo $linha['complemento']?>" type="text">
              </div>
            </div>



            <span class="section">Contato</span>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telefone
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="telefone" maxlength="15" class="form-control col-md-7 col-xs-12" value="<?php echo $linha['telefone']?>" onkeyup="mascara('(##)####-####',this,event,true)">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Celular
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="celular" maxlength="15" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $linha['celular']?>" onkeyup="mascara('(##)#####-####',this,event,true)">
              </div>
            </div>



            <span class="section">Informações de Acesso</span>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">E-mail
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="email" maxlength="250" value="<?php echo $linha['email']?>" onblur="checarEmail();" type="text" required="required" >
              </div>
            </div>

            <div class="item form-group">
              <label for="password" class="control-label col-md-3">Senha
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="senha" maxlength="50" class="form-control col-md-7 col-xs-12" value="<?php echo $linha['senha']?>" required="required">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="acesso">Acesso
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id=selectTipoPerfil name="acesso" value="<?php echo $linha['perfilUsuario']?>" >
                  <option value="1">Professor</option>
                  <option value="2">Professor Administrador</option>
                </select>
              </div>
            </div>


            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                   
        
                <input type="button" name="cancelar" class="btn btn-primary" onClick="window.location.href='ConsultarProfessor.php'" value="Cancelar">
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
