<?php
	include "../DAO/conexao.php";
	session_start();
		if(!isset($_SESSION['nome']))
		{
			header('location: ../loguin.php');
		}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Processos Seletivos </title>

    <!-- Bootstrap -->
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../CSS/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../CSS/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../CSS/jquery.mCustomScrollbar.min.css" rel="stylesheet" />

    <!-- Custom Theme Style -->
    <link href="../CSS/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="indexProfessor.php" class="site_title"><i class="fa "></i> <span>Processo
                                Seletivo</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../IMAGENS/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bem vindo,</span>
                            <h2><?php echo $_SESSION['nome']; ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Geral</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa "></i> Professor <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="CadastroProfessor.php">Cadastrar</a></li>
                                        <li><a href="ConsultarProfessor.php">Consultar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa "></i> Curso <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="CadastroCurso.php">Cadastrar</a></li>
                                        <li><a href="ConsultarCurso.php">Consultar</a></li>
                                        </ul>
                                </li>
                                <li><a><i class="fa "></i> Linha de Pesquisa <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="CadastrarLinhaPesquisa.php">Cadastrar</a></li>
                                        <li><a href="ConsultarLinhaPesquisa.php">Consultar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa "></i> Vinculo <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="#CadastrarVinculo.php">Cadastrar</a></li>
                                        <li><a href="ConsultarVinculo.php">Consultar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa "></i> Processo Seletivo <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="CadastrarProcessoSeletivo.php">Cadastrar</a></li>
                                        <li><a href="ConsultarProcessoSeletivo.php">Consultar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa "></i>Tipo Processo <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="CadastrarTipoProcesso.php">Cadastrar</a></li>
                                        <li><a href="ConsultarTipoProcesso.php">Consultar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Configurações">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Tela cheia">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Bloquear">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Sair" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- menu horizontal -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../IMAGENS/user.png" alt=""><?php echo $_SESSION['nome']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Perfil</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span>Configurações</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Ajuda</a></li>
                                    <li><a href="../loguin.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                                </ul>
                            </li>

                            <!-- /top navigation -->
                </div>
            </div>
            <!-- page content -->
            <div class="right_col" role="main">
  

</body>

</html>    
            