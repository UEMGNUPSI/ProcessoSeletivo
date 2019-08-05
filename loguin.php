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
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome -->
    <!--  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     NProgress 
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  Animate.css 
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">-->

    <!-- Custom Theme Style -->
    <link href="CSS/custom.min.css" rel="stylesheet">
 
  </head>

  <body class="login">
  
   <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="DAO/valida.php" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite seu CPF ou Email" required="" name="usuario"/>
              </div>
                <div>
                <input type="password" class="form-control" placeholder="Senha" required="" name="senha"/>
                </div>
                    <div>
           
                    <h2 >Tipo de Usuário    </h2>
                <select class="form-control" id=selectTipoPerfil name="Tipo">
    <option value="1">Professor</option>
    <option value="0">Candidato</option>

</select>
</div>
<br>


<div>
  <input type="submit"class="btn btn-primary" value="Entrar" >
</div>
            
              <div class="clearfix"></div>

              <div class="separator">
                <p >Novo no site?<a  href="Candidato/Cadastro.php" class="to-register">Criar conta </a> </p>
                
                          </div>
                       </form>

                                </section>
        </div>
      </div>
    </div>
    
  </body>
</html>
