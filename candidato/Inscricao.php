<?php
include_once("MenuCandidato.php");

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
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Endereço">
                            <span class="round-tab">
                            <i class="glyphicon glyphicon-map-marker"></i>
                               
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Formulário de Inscrição">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-list-alt	"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step4" role="tab" title="Formação">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-education"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Completo">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <h3>Informações Pessoais</h3>

        <div class="x_panel">

    <div class="form-group col-md-6">
      <label >Nome completo</label>
      <input type="text" class="form-control" name="nome">
    </div>

    
    <div class="form-group col-md-6">
      <label >Data de Nascimento</label>
      <input type="date" class="form-control" name="dtNascimento">
    </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Nome da mãe</label>
      <input type="text" class="form-control" name="nomeMae">
    </div>

    <div class="form-group col-md-6">
      <label>Nome do pai</label>
      <input type="text" class="form-control" name="nomePai">
    </div>


<div class="form-group col-md-6">
      <label>Nacionalidade</label>
      <input type="text" class="form-control" name="nacionalidade">
    </div>

    <div class="form-group col-md-6">
      <label>Naturalidade</label>
      <input type="text" class="form-control" name="naturalidade">
    </div>


    <div class="form-group col-md-4">
      <label for="inputState">Estado civil</label>
      <select id="inputState" class="form-control">
        <option >Selecione</option>
        <option value="Solteiro (a)">Solteiro (a)</option>
        <option value="Casado (a)">Casado (a)</option>
        <option value="Viúvo (a)">Viúvo (a)</option>
        <option value="Divorciado (a)">Divorciado (a)</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Sexo </label>
      <select id="inputState" class="form-control">
      <option>Selecione</option>
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Raça/etnia </label>
      <select id="inputState" class="form-control">
      <option>Selecione</option>
        <option value="">Branco (a)</option>
        <option>Negro (a)</option>
        <option>Pardo (a)</option>
        <option>Mulato (a)</option>
        <option>Indígena</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label>RG</label>
      <input type="text" class="form-control" name="rg">
    </div>

    <div class="form-group col-md-2">
      <label>Orgão Expedidor</label>
      <input type="text" class="form-control">
    </div>
  </div>

</div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Endereço</h3>

                        <div class="x_panel">

<div class="form-group col-md-6">
  <label >Rua/Av</label>
  <input type="text" class="form-control" name="rua">
</div>


<div class="form-group col-md-2">
  <label >Nº</label>
  <input type="text" class="form-control" name="numero">
</div>

<div class="form-group col-md-4">
  <label>Complemento</label>
  <input type="text" class="form-control" name="complemento">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Bairro</label>
  <input type="text" class="form-control" name="bairro">
</div>

<div class="form-row">
<div class="form-group col-md-6">
  <label>Cidade</label>
  <input type="text" class="form-control" name="cidade">
</div>


<div class="form-group col-md-4">
  <label>UF </label>
  <select class="form-control">
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
  <input type="text" class="form-control">
</div>


<div class="form-group col-md-4">
  <label>Tel. Celular</label>
  <input type="text" class="form-control">
</div>

<div class="form-group col-md-4">
  <label>Tel. Residencial</label>
  <input type="text" class="form-control">
</div>


<div class="form-group col-md-8">
  <label>Email</label>
  <input type="mail" class="form-control">
</div>

</div>


</div>
  </div>
                           <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>
                

                    <div class="tab-pane" role="tabpanel" id="step3">
                         <h3>Formulário de Inscrição</h3>    
                 
                         <div class="x_panel"  >

  <label>Atestado de Proficiência em Língua Estrangeira</label>
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">Sim</label>
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">Não</label>
  </div>


                           <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="step4">
                        <h3>Formação</h3>
                            <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="complete">
                        <h3>Completo</h3>
                        <p>Sua inscrição foi efetuada com sucesso!</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>

                      <?php
include_once("FooterCandidato.php");

?>

