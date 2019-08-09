<?php
include_once ("MenuCandidato.php");

?>
<?php
include "../DAO/conexao.php";


if(!isset($_SESSION['user']))
{
    header('location: ../loguin.php');
}
$idCandidato=$_SESSION['idCandidato'];

$sql = "SELECT * FROM Candidato WHERE idCandidato = '$idCandidato' " ;



$res = $con-> query($sql);
$linha = $res->fetch_assoc();

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
          <h1><center>Editar Senha</center></h1>   
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarSenha.php" method="POST" onsubmit="return(verifica())" class="form-horizontal form-label-left">
            <span class="section">Dados Pessoais</span>

            <input type="hidden" name="codigo" value="<?php echo $linha['idCandidato']; ?>">
      

            <div class="form-group col-md-6">
              <label for="nome">Nome
              </label>
              <input class="form-control" maxlength="250" name="nome" required="required" value="<?php echo $linha['nome']; ?>"type="text">
          </div>
           
            <div class="form-group col-md-6">
              <label  for="email">E-mail
              </label>
              
                <input class="form-control col-md-7 col-xs-12" name="email" maxlength="250" value="<?php echo $linha['email']?>" onblur="checarEmail();" type="text" required="required" >
              
            </div>

            <div class="form-group col-md-2">
  <label for="password" >Senha
  </label>
  
    <input type="password" id="senha" name="senha" maxlength="255" class="form-control col-md-7 col-xs-12" required="required">
 
</div>

<div class="form-group col-md-2">
  <label for="password" >Confirma a senha
  </label>
  
    <input type="password" name="senha_confirma" maxlength="255" class="form-control col-md-7 col-xs-12" required="required" oninput="validaSenha(this)" >
  
</div>



              <div class="col-md-6 col-md-offset-4">

        <button type="button" class="btn btn-primary" data-dismiss="modal"  onClick="window.location.href='IndexCandidato.php'" >Cancelar</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" >Salvar</button>
        
        
        </form>   
        
        </div> 
        </div> 
        </div> 
       
        <script src="../JS/mascaras.js"></script>


<?php
include_once ("FooterCandidato.php");

?>