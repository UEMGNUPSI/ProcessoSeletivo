
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Processo Seletivo | </title>

    <!-- Bootstrap -->
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../CSS/custom.min.css" rel="stylesheet">
 

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
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Cadastro</h3>
        </center>
      </div>
      <div class="modal-body">

        <form action="EnvioCadastro.php" method="POST"  onsubmit="return(verifica())" class="form-horizontal form-label-left">

<div class="item form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome completo
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input class="form-control col-md-7 col-xs-12" maxlength="250" name="nome" required="required" type="text">
  </div>
</div>

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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"  onClick="window.location.href='../loguin.php'" >Cancelar</button>
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
</div>
  </form>

<script src="../JS/mascaras.js"></script>

  </body>
</html>
