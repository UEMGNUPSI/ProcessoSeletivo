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
          <h1><center>Editar Perfil</center></h1>   
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
 
          <form action="AlterarCandidato.php" method="POST" onsubmit="return(verifica())" class="form-horizontal form-label-left">
            <span class="section">Dados Pessoais</span>

          
      <input type="hidden" name="codigo" value="<?php echo $linha['idCandidato']; ?>">
     <input type="hidden" name="senha" value="<?php echo $linha['senha']; ?>">


            <div class="form-group col-md-6">
              <label for="nome">Nome
              </label>
              <input class="form-control" maxlength="250" name="nome" required="required" value="<?php echo $linha['nome']; ?>"type="text">
          </div>
            <div class="form-group col-md-6">
              <label >Filiação
              </label>
                <input type="text" name="filiacao" maxlength="20" class="form-control col-md-7 col-xs-12"  value="<?php echo $linha['filiacao']?>"  >
            
            </div>
            <div class="form-group col-md-6">
              <label for="rg">RG
              </label>
             
                <input class="form-control col-md-7 col-xs-12" maxlength="20"name="rg" type="text" value="<?php echo $linha['rg']?>"  onkeyup="mascara('##.###.###-#',this,event,true)">
              
            </div>
  


           

            <div class=" form-group col-md-2">
              <label  for="">Orgão Expedidor
              </label>
             
                <input  class="form-control" maxlength="15" name="orgaoExp" value="<?php echo $linha['orgaoExp']?>"type="text">
          
            </div>
        
            <div class=" form-group col-md-4">
              <label >CPF
              </label>
            
                <input type="text" name="cpf" maxlength="20" class="form-control col-md-7 col-xs-12"  value="<?php echo $linha['cpf']?>" onkeyup="mascara('###.###.###-##',this,event,true)">
              
            </div>
            <div class="form-group col-md-6">
              <label  for="email">E-mail
              </label>
              
                <input class="form-control col-md-7 col-xs-12" name="email" maxlength="250" value="<?php echo $linha['email']?>" onblur="checarEmail();" type="text" " >
              
            </div>

     

<div class=" form-group col-md-2">
              <label for="" >Nacionalidade
              </label>
              
                <input type="text" name="nacionalidade" maxlength="50" class="form-control col-md-7 col-xs-12" value="<?php echo $linha['nacionalidade']?>" >
              
            </div>
            <div class=" form-group col-md-2">
              <label for="Naturalidade" >Naturalidade
              </label>
              
                <input type="text" name="naturalidade" maxlength="50" class="form-control col-md-7 col-xs-12" value="<?php echo $linha['naturalidade']?>" >
              
            </div>
         
            <div class="form-group col-md-2">
              <label  for="etnia">Etnia
              </label>
              
                <select class="form-control" id=selectidetnia name="etnia">
                <option value= "<?php echo $linha['etnia'];?>"><?php echo $linha['etnia'];?></option></select>
</div>


<div class="form-group col-md-2">
              <label  for="estadoCivil">Estado Civil
              </label>
              
                <select class="form-control" id=selectidestadocivil name="estadoCivil">
                <option value= "<?php echo $linha['estadoCivil'];?>"><?php echo $linha['estadoCivil'];?></option></select>
</div>
<div class="form-group col-md-2">
              <label  for="estadoCivil">Sexo
              </label>
              
                <select class="form-control" id=selectidestadocivil name="sexo">
                <option value= "<?php echo $linha['sexo'];?>"><?php echo $linha['sexo'];?></option></select>
</div>
<div class=" form-group col-md-2">
              <label for="Naturalidade" >Data de Nascimento
              </label>
              
                <input type="date" name="dtNascimento" maxlength="50" class="form-control col-md-7 col-xs-12" value="<?php echo $linha['dtNascimento']?>" >
              
            </div>
              <div class="col-md-6 col-md-offset-5">

        <button type="button" class="btn btn-primary" data-dismiss="modal"  onClick="window.location.href='../loguin.php'" >Cancelar</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal" >Salvar</button>
        
        
        </form>   
        
        </div> 
        </div> 
        </div> 
       
        <script src="../JS/tables/jquery.mascaras.js"></script>


<?php
include_once ("FooterCandidato.php");

?>