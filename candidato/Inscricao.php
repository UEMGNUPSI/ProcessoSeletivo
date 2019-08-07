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

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="step2">
                        <h3>Endereço</h3>
                           <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Salvar e continuar</button></li>
                        </ul>
                    </div>


                    <div class="tab-pane" role="tabpanel" id="step3">
                        <h3>Formulário de Inscrição</h3>
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

