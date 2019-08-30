<?php
include_once("MenuCandidato.php");

?>

<?php
include_once("../DAO/conexao.php");

$result_linhaPesquisa ="SELECT * FROM linhadepesquisa";
$resultado_linhaPesquisa= mysqli_query($con, $result_linhaPesquisa);

$result_linhaPesquisa1 ="SELECT * FROM linhadepesquisa";
$resultado_linhaPesquisa1= mysqli_query($con, $result_linhaPesquisa1);

$result_linhaPesquisa2 ="SELECT * FROM linhadepesquisa";
$resultado_linhaPesquisa2= mysqli_query($con, $result_linhaPesquisa2);

$result_linhaPesquisa3 ="SELECT * FROM linhadepesquisa";
$resultado_linhaPesquisa3= mysqli_query($con, $result_linhaPesquisa3);

if(!isset($_SESSION['user']))
{
    header('location: ../loguin.php');
}

$idCandidato=$_SESSION['idCandidato'];

$sql = "SELECT * FROM Candidato WHERE idCandidato = '$idCandidato' " ;


$res = $con-> query($sql);
$linha = $res->fetch_assoc();

?>

<link rel="stylesheet" type="text/css" href="../CSS/inscricao.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../JS/inscricao.js"></script>

<!------ Include the above in your HEAD tag ---------->

		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Informações Pessoais">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Endereço Residencial">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-home"></i>
                               
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Endereço Comercial">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-map-marker"></i>
                               
                            </span>
                        </a>
                    </li>
                    
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Formulário de Inscrição">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Formação Acadêmica">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-education"></i>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

            <form id="cadastro" role="cadastro" action="envioFormularioMestrado_ca.php" method="POST">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                       <center> <h3>Informações Pessoais</h3></center>
        <div class="x_panel">

        <input type="hidden" class="form-control" name="idCandidato" value="<?php echo $linha['idCandidato']?>">


    <div class="form-group col-md-6">
      <label >Nome completo</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome']?>" disabled>
    </div>

    
    <div class="form-group col-md-6">
      <label >Data de Nascimento</label>
      <input type="date" class="form-control" name="dtNascimento" value="<?php echo $linha['dtNascimento']?>" disabled>
    </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome da mãe</label>
      <input type="text" class="form-control" name="nomeMae" value="<?php echo $linha['nomeMae']?>" disabled>
    </div>

    <div class="form-group col-md-6">
      <label>Nome do pai</label>
      <input type="text" class="form-control" name="nomePai" value="<?php echo $linha['nomePai']?>"disabled>
    </div>


<div class="form-group col-md-6">
      <label>Nacionalidade</label>
      <input type="text" class="form-control" name="nacionalidade" value="<?php echo $linha['nacionalidade']?>" disabled>
    </div>

    <div class="form-group col-md-6">
      <label>Naturalidade</label>
      <input type="text" class="form-control" name="naturalidade" value="<?php echo $linha['naturalidade']?>" disabled>
    </div>


    <div class="form-group col-md-4">
      <label for="inputState">Estado civil</label>
      <select id="inputState" class="form-control" name="selectEstadoCivil"disabled>
      <option value= "<?php echo $linha['estadoCivil'];?>"><?php echo $linha['estadoCivil'];?></option>        
        <option value="Solteiro (a)">Solteiro (a)</option>
        <option id="Casado" value="Casado (a)">Casado (a)</option>
        <option name="Viuvo" value="Viúvo (a)">Viúvo (a)</option>
        <option name="Divorciado" value="Divorciado (a)">Divorciado (a)</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Sexo </label>
      <select id="inputState" class="form-control" name="selectSexo"disabled>
      <option value= "<?php echo $linha['sexo'];?>"><?php echo $linha['sexo'];?></option>        
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Raça/etnia </label>
      <select id="inputState" class="form-control" name="selectEtnia"disabled>
      <option value= "<?php echo $linha['etnia'];?>"><?php echo $linha['etnia'];?></option>        
        <option value="">Branco (a)</option>
        <option>Negro (a)</option>
        <option>Pardo (a)</option>
        <option>Mulato (a)</option>
        <option>Indígena</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label>RG</label>
      <input type="text" class="form-control" name="rg" value="<?php echo $linha['rg']?>" disabled>
    </div>

  <div class="form-group col-md-2">
      <label>Orgão Expedidor</label>
      <input type="text" class="form-control" name="orgaoExpedidor" value="<?php echo $linha['orgaoExp']?>" disabled>
    </div>
  </div>
  <br>

  <div class="form-group col-md-8">
   <label><h3><a onClick="window.location.href='perfilCandidato.php'" target="_blank" title="Editar meus dados"> Para editar suas informações pessoais,clique aqui</a>
<h3></label>
</div>


</div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="step2">
                       <center> <h3>Endereço Residencial</h3></center>

<form name="form1">
                        <div class="x_panel">
<div class="form-group col-md-6">
  <label >Rua/Av</label>
  <input type="text" class="form-control" id="rua" name="rua" required="required">
</div>


<div class="form-group col-md-2">
  <label >Nº</label>
  <input type="text" class="form-control" id="numero" name="numero" required="required">
</div>

<div class="form-group col-md-4">
  <label>Complemento</label>
  <input type="text" class="form-control" name="complemento">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Bairro</label>
  <input type="text" class="form-control" name="bairro" required="required">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Cidade</label>
  <input type="text" class="form-control" name="cidade" required="required">
</div>


<div class="form-group col-md-4">
  <label>UF </label>
  <select class="form-control" name="selectEstado" required="required">
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


<div class="form-group col-md-4">
  <label>CEP</label>
  <input type="text" class="form-control" name="cep" required onkeyup="mascara('##.###-###',this,event,true)">
</div>


<div class="form-group col-md-4">
  <label>Tel. Celular</label>
  <input type="text" class="form-control" name="telCelular" required="required" onkeyup="mascara('(##)#####-####',this,event,true)">
</div>

<div class="form-group col-md-4">
  <label>Tel. Residencial</label>
  <input type="text" class="form-control" name="telResidencial" onkeyup="mascara('(##)####-####',this,event,true)">
</div>


<div class="form-group col-md-8">
  <label>Email</label>
  <input type="mail" class="form-control" name="emailContato" required="required" onblur="checarEmail();" >
</div>

</div>


</div>
  </div>
                           <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" id="btnEnderecoResidencial"  class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$(document.form1).ready(function(){
  $('#campo').on('input', function(){
    $('#btnEnderecoResidencial').prop('disabled', $(this).val().length < 0);
  });
});
</script>




                    <div class="tab-pane" role="tabpanel" id="step3">
                       <center> <h3>Endereço Comercial (*opcional)</h3></center>

                        <div class="x_panel">


  <div class="form-group col-md-6">
  <label >Empresa/Instituição</label>
  <input type="text" class="form-control" name="emrpesaInstituicao">
</div>


<div class="form-group col-md-6">
  <label >Função</label>
  <input type="text" class="form-control" name="funcao">
</div>

<div class="form-group col-md-6">
  <label >Rua/Av</label>
  <input type="text" class="form-control" name="ruaComercial">
</div>


<div class="form-group col-md-2">
  <label >Nº</label>
  <input type="text" class="form-control" name="numeroComercial">
</div>

<div class="form-group col-md-4">
  <label>Complemento</label>
  <input type="text" class="form-control" name="complementoComercial">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Bairro</label>
  <input type="text" class="form-control" name="bairroComercial">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Cidade</label>
  <input type="text" class="form-control" name="cidadeComercial">
</div>


<div class="form-group col-md-4">
  <label>UF </label>
  <select class="form-control" name="selectEstadoComercial">
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


<div class="form-group col-md-4">
  <label>CEP</label>
  <input type="text" class="form-control" name="cepComercial" onkeyup="mascara('##.###-####',this,event,true)">
</div>


<div class="form-group col-md-4">
  <label>Telefone</label>
  <input type="text" class="form-control" name="telefoneComercial" onkeyup="mascara('(##)####-####',this,event,true)">
</div>


<div class="form-group col-md-8">
  <label>Email</label>
  <input type="mail" class="form-control" name="emailComercial" onblur="checarEmail();">
</div>

</div>


</div>
  </div>

  <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>




                    <div class="tab-pane" role="tabpanel" id="step4">
                       <center>  <h3>Formulário de Inscrição</h3>    </center>
                 
                         <div class="x_panel"  >

  <label>Atestado de Proficiência em Língua Estrangeira</label>
  <br>
  <input class="form-check-input" type="radio" name="LinguaEstrangeira" value="Sim" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck1">Sim</label>
  <br>
  <input class="form-check-input" type="radio" name="LinguaEstrangeira" value="Não" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">Não</label>
  
  <br>
<br>
  <label>Assinale</label>
  <br>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="canhoto_destro" value="Canhoto (a)" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck1">Canhoto (a)</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="canhoto_destro" value="Destro (a)" id="defaultCheck2">
  <label class="form-check-label" for="defaultCheck2">Destro (a)</label>
  </div>

<br>
<div class="form-group col-md-8">

      <label> UNIDADE DA UEMG EM QUE PRETENDE REALIZAR A PROVA ESCRITA</label>
      <select class="form-control" name="localProva" required="required">
      <option>Selecione</option>
        <option value="Frutal">Frutal</option>
        <option value="Faculdade de Educação (FaE) – Belo Horizonte">Faculdade de Educação (FaE) – Belo Horizonte</option>
      </select>
  
</div>

<div class="form-group col-md-6">

<label>LINHA DE PESQUISA  </label>
<br>
                <select class="form-control" id=selectlinhapesquisa name="select_linhapesquisa" required="required">

  <option>Selecione a linha de pesquisa</option>
              
  <?php while($rows_linhaPesquisa = mysqli_fetch_assoc($resultado_linhaPesquisa)){ ?>

<option value="<?php echo $rows_linhaPesquisa['idLinhaPesquisa'];?>"><?php echo  ($rows_linhaPesquisa['nomePesquisa']);?></option>

<?php } ?>	

</select>
</div>
        
<script>
         function retiraOption(select)
{
	document.cadastro.orientador2.remove(select.selectedIndex);
}
 </script>

<div class="form-group col-md-8">

<label>SELECIONE A LINHA DE PESQUISA DE SEU ORIENTADOR(PRIORIDADE 1) </label>
<br>
                <select class="form-control" id="id_linhapesquisa1" name="id_linhapesquisa1" required="required">

  <option>Selecione a linha de pesquisa</option>
              
  <?php while($rows_linhaPesquisa1 = mysqli_fetch_assoc($resultado_linhaPesquisa1)){ ?>

<option value="<?php echo $rows_linhaPesquisa1['idLinhaPesquisa'];?>"><?php echo  ($rows_linhaPesquisa1['nomePesquisa']);?></option>

<?php } ?>	


</select>
</div>

<div class="form-group col-md-4">


         <label>ORIENTADOR (PRIORIDADE 1)  </label>
         <span class="carregando">Aguarde, carregando...</span>
				<select class="form-control" id="orientador1" name="orientador1" required="required">
        <option value="">Escolha o orientador</option>
			</select><br>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		
		<script type="text/javascript">
		$(function(){
			$('#id_linhapesquisa1').change(function(){
				if( $(this).val() ) {
					$('#orientador1').hide();
					$('.carregando').show();
					$.getJSON('processa_orientador1.php?search=',{id_linhapesquisa1: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha o orientador</option>';	
						for (var i = 0; i < j.length; i++) {
              if ((id_linhapesquisa2.value == id_linhapesquisa1.value) || (id_linhapesquisa1.value == id_linhapesquisa3.value))
{
 if ((orientador2.value==j[i].idProfessor)||(j[i].idProfessor==orientador3.value) )	
	{
       		
       }
 else     
	{

	options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';					
}	
}	
else{
  options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';
}
						}	
            	
						$('#orientador1').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#orientador1').html('<option value="">– Escolha o orientador –</option>');
				}
			});
		});
		</script>


<div class="form-group col-md-8">

<label>SELECIONE A LINHA DE PESQUISA DE SEU ORIENTADOR(PRIORIDADE 2) </label>
<br>
                <select class="form-control" id="id_linhapesquisa2" name="id_linhapesquisa2" required="required">

  <option>Selecione a linha de pesquisa</option>
              
  <?php while($rows_linhaPesquisa2 = mysqli_fetch_assoc($resultado_linhaPesquisa2)){ ?>

<option value="<?php echo $rows_linhaPesquisa2['idLinhaPesquisa'];?>"><?php echo  ($rows_linhaPesquisa2['nomePesquisa']);?></option>

<?php } ?>	


</select>
</div>

		
		<script type="text/javascript">
		$(function(){
			$('#id_linhapesquisa2').change(function(){
				if( $(this).val() ) {
					$('#orientador2').hide();
					$('.carregando').show();
					$.getJSON('processa_orientador2.php?search=',{id_linhapesquisa2: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha o orientador</option>';	
						for (var i = 0; i < j.length; i++) {

              
                  if ((id_linhapesquisa2.value == id_linhapesquisa1.value) || (id_linhapesquisa2.value == id_linhapesquisa3.value))
{
 if ((orientador1.value==j[i].idProfessor)||(j[i].idProfessor==orientador3.value) )	
	{
       		
       }
 else     
	{

	options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';					
}	
}	
else{
  options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';
}
							//options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';
						}	
						$('#orientador2').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#orientador2').html('<option value="">– Escolha o orientador –</option>');
				}
			});
		});
		</script>


<div class="form-group col-md-4">

<label>ORIENTADOR (PRIORIDADE 2)  </label>
         <span class="carregando">Aguarde, carregando...</span>
				<select class="form-control" id="orientador2" name="orientador2" required="required">
        <option value="">Escolha o orientador</option>
			</select><br>
</div>


<div class="form-group col-md-8">

<label>SELECIONE A LINHA DE PESQUISA DE SEU ORIENTADOR(PRIORIDADE 3) </label>
<br>
                <select class="form-control" id=id_linhapesquisa3 name="id_linhapesquisa3" required="required">

  <option>Selecione a linha de pesquisa</option>
              
  <?php while($rows_linhaPesquisa3 = mysqli_fetch_assoc($resultado_linhaPesquisa3)){ ?>

<option value="<?php echo $rows_linhaPesquisa3['idLinhaPesquisa'];?>"><?php echo  ($rows_linhaPesquisa3['nomePesquisa']);?></option>

<?php } ?>	


</select>
</div>

<script type="text/javascript">
		$(function(){
			$('#id_linhapesquisa3').change(function(){
				if( $(this).val() ) {
					$('#orientador3').hide();
					$('.carregando').show();
					$.getJSON('processa_orientador3.php?search=',{id_linhapesquisa3: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha o orientador</option>';	
						for (var i = 0; i < j.length; i++) {
              if ((id_linhapesquisa1.value == id_linhapesquisa3.value) || (id_linhapesquisa2.value == id_linhapesquisa3.value))
{
 if ((orientador2.value==j[i].idProfessor)||(j[i].idProfessor==orientador1.value) )	
	{
       		
       }
 else     
	{

	options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';					
}	
}	
else{
  options += '<option value="' + j[i].idProfessor + '">' + j[i].nomeProfessor + '</option>';
}
				
						}	
						$('#orientador3').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#orientador3').html('<option value="">– Escolha o orientador –</option>');
				}
			});
		});
		</script>

<div class="form-group col-md-4">

<label>ORIENTADOR (PRIORIDADE 3)  </label>
         <span class="carregando">Aguarde, carregando...</span>
				<select class="form-control" id="orientador3" name="orientador3" required="required">
        <option value="">Escolha o orientador</option>
			</select><br>
</div>

</div>      
                           <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="complete">
                        <center><h3>Formação Universitária</h3></center>


                        <div class="x_panel">

<div class="form-group col-md-6">
  <label >Curso de graduação</label>
  <input type="text" class="form-control" name="cursoGraduacao" required="required">
</div>

<div class="form-group col-md-6">
  <label >Instituição</label>
  <input type="text" class="form-control" name="instituicao" required="required">
</div>

<div class="form-group col-md-4">
  <label >Ano de conclusão</label>
  <input type="text" class="form-control" name="anoConclusao" required="required">
</div>

<div class="form-group col-md-8">

      <label> Selecione seu grau acadêmico</label>
      <select class="form-control" name="selectGrauAcademico" required="required">
      <option></option>
        <option value="Bacharelado">Bacharelado</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="BachareladoLicenciatura">Bacharelado e Licenciatura</option>
      </select>
  
</div>


</div>
<center><h3>Outra Graduação(*opcional)</h3></center>
<div class="x_panel">

<div class="form-group col-md-6">
  <label >Curso de graduação</label>
  <input type="text" class="form-control" name="cursoGraduacao2">
</div>

<div class="form-group col-md-6">
  <label >Instituição</label>
  <input type="text" class="form-control" name="instituicao2">
</div>

<div class="form-group col-md-4">
  <label >Ano de conclusão</label>
  <input type="text" class="form-control" name="anoConclusao2">
</div>

<div class="form-group col-md-8">

      <label> Selecione seu grau acadêmico</label>
    <select class="form-control" name="selectGrauAcademico2">
      <option></option>
        <option value="Bacharelado">Bacharelado</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="BachareladoLicenciatura">Bacharelado e Licenciatura</option>
      </select>
  
</div>

</div>
                            <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="submit" class="btn btn-primary btn-info-full next-step">Finalizar</button></li>
                        </ul>
                    </div>

            </form>
        </div>
    </section>
    <script src="../JS/mascaras.js"></script>
    <script src="./JS/validacao.js"></script>
    <script src="./JS/jquery.js"></script>
    <script src="./JS/jquery.validate.js"></script>
                      <?php
include_once("FooterCandidato.php");

?>

