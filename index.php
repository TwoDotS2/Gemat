<!-- "My User Login Page"
Bootstrap 4.0.0 Snippet by Raj78 -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/images/001_Logo-GeMat.png" type="image/x-icon">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="public/login-cad_style.css">

</head>
<body>

<div class="wrapper">
  <div class="formContent">

    <div>
        <img src="public/images/004_Logo-GeMat.png" id="icon" alt="User Icon" />
    </div>
    
    <h1>GeMat - Login</h1>
	
	<?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
    <div>
    <p style='color: red;'>ERRO: Usuario ou senha invalidos.</p></div>
	<?php
        endif;
        unset($_SESSION['nao_autenticado']);
	?>
	
    <form action="src/model/login.php" method="POST">
      <input type="text" id="nome_usu" name="nome_usu" placeholder="Nome de Usuario">
      <input type="password" id="senha" name="senha" placeholder="Senha">
      <input type="submit" value="Entrar">
    </form>

    <div class="formFooter">
      <a class="underlineHover" href="src/view/tela_cadastro.php">Cadastre-se!</a>
    </div>
  </div>

</div>
</body>
</html>