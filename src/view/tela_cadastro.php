<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../public/images/001_Logo-GeMat.png" type="image/x-icon">
        <title>GeMat - Gestão de Matrizes</title>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <script src="../controller/carregarProjetos.js"></script>
        <link rel="stylesheet" type="text/css" href="../../public/login-cad_style.css">
        
      </head>
      <body>
        
        <div class="wrapper">
            <div class="formContent">
          
              <div>
                  <img src="../../public/images/004_Logo-GeMat.png" id="icon" alt="User Icon" />
              </div>
              
              <h1>GeMat - Cadastrar</h1>
					
              <form action="../model/cadastrar.php" method="POST">
                <input type="text" name="nome_usu" placeholder="Insira seu Nome de Usuário" >
                <input type="text" name="email" placeholder="Insira seu E-mail">
                <input type="password" name="senha" placeholder="Insira sua senha">
                <input type="submit" value="Cadastrar">
              </form>
          
              <div class="formFooter">
                <a class="underlineHover" href="../../index.php">Tela de login</a>
              </div>
              
            </div>
          
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>