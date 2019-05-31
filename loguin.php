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
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
   <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="valida.php" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Digite seu CPF ou Email" required="" />
              </div>
                <div>
                <input type="password" class="form-control" placeholder="Senha" required="" />
                </div>
                    <div>
                        <label class="form-control">Tipo de usuário</label>
                <select class="form-control" id=selectTipoPerfil>
    <option name="professor">Professor</option>
    <option name="candidato">Candidato</option>
</select>
</div>
        

              <div>
             <input type="submit" class="btn btn-default submit" value="Entrar">
                <a class="reset_pass" href="#">Esqueceu sua senha?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo no site?
                  <a href="#signup" class="to_register"> Criar conta </a>
                </p>
                  </div>
           
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
