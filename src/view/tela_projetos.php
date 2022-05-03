<?php
include('../controller/verificaLogin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../public/images/001_Logo-GeMat.png" type="image/x-icon">
        <title>GeMat - Gestão de Matrizes</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="../../public/style.css">
    </head>
    <body>
        <div class="cabecalho">
            <header>
                <img src= "../../public/images/001_Logo-GeMat.png" alt="Logo GeMat(Gestão de Matrizes)" width="100px" height="100px">
                <p>GeMat - Gestão de Matrizes</p>
				<span style='color: white; margin-left: 40%; margin-right: 1%;'>Seja bem-vindo,</span>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle bg-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION['nome_usu']?>
					</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item">Configurações</a></li>
                        <li><a class="dropdown-item" href="../controller/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <hr id="header_sub_line">
        </div>
		
		<div class="container" style="margin-bottom: 50px;"><h1> Tela dos seus Projetos:</h1></div>
		
		<div class="container" style="margin-bottom: 50px;">
		<h3> Inserir Projeto: </h3>
			<form action="../model/inserirProjeto.php" method="POST">
                <input type="text" name="nome_projeto" placeholder="Nome do Projeto" >
                <input type="submit" value="Inserir" class="btn btn-primary">
              </form>
		</div>

        <div id="container_lista" class="container">
		<h3>Seus Projetos:</h3>
        </div>
		
		
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		<script>
	
			var reqTabela = $.ajax({
				type: "POST",
				url: "../model/carregarProjetos.php",
				dataType: "JSON"
			});
		
			function carregarConteudo(projetos){
				var conteudo = "<table class='table'> <thead class='thead-dark'> <tr> <th>Nome do projeto</th> <th>Ver Setores</th> <th> Excluir</th> </tr> </thead> <tbody>";
				var count = Object.keys(projetos).length;
				for(var i = 0; i < count; i++){
					conteudo += "<tr><td>" + projetos[i][1] +"</td>" + "<td><button type='button' onclick='salvarIdProjeto(this.id)' id='" + projetos[i][0] + "' class='btn btn-primary'>Setores</button></td>" + "<td><button type='button' onclick='excluirRegistro(this.id)' id='" + projetos[i][0] + "x' class='btn btn-danger'>Excluir</button></td></tr>";
				}
				
				conteudo += "</tbody></table>";
				$("#container_lista").append(conteudo);
			}
				
			$(document).ready(()=>{
				reqTabela.done((projetos) => {
					carregarConteudo(projetos);
				});
			});
			
			function salvarIdProjeto(id){
				console.log('olá');
				$.ajax({
				type: "POST",
				url: "../controller/salvarIdProjeto.php",
				data: {id_projeto: id},
				dataType: "JSON"
				}).done((response)=>{
					window.location.href = '../view/tela_setores.php';
				})
			};
			
			function excluirRegistro(id){
				var temp_id = parseInt(splitString(id, 'x'));
				$.ajax({
					type: "POST",
					url: "../model/excluirProjeto.php",
					data: {id_projeto: temp_id},
					dataType: "JSON"
				}).done((response)=>{
					window.location.href = '../view/tela_projetos.php';
				});

			};
			
			function splitString(stringToSplit, separator) {
				var arrayOfStrings = stringToSplit.split(separator).join('');
				return arrayOfStrings;
			}
		</script>
    </body>
</html>

