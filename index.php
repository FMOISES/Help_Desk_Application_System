<?php
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container" >    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method ="post">
                <div class="form-group">
                  <input name = "email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name = "senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
              
              <?php
              //isset verifica se existe login dentro de $_GET.
              //após temos um teste em que o sistema toma decisão de mostrar ou não o erro.
              if(isset($_GET['login']) && $_GET['login']=='erro'){
               ?>
                <script>
                // script em java script que traz uma alerta e redireciona pagina para index.php
                alert('senha ou email invalido.')
                window.location.href = "index.php";
                </script>
              <?php }else if(isset($_GET['login']) && $_GET['login']=='erro2'){
                ?>
                <script>
                // script em java script que traz uma alerta e redireciona pagina para index.php
                alert('Faça o login para que tenha acesso.')
                window.location.href = "index.php";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>