<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_projeto'])){
	header("Location: ../view/tela_projetos.php");
	exit();
};

$id_usu = implode(",", $_SESSION['id_usuario']);
$nome_projeto = mysqli_real_escape_string($conn, $_POST['nome_projeto']);

$insert =  "INSERT INTO projetos(id_usu, nome_projeto) VALUES( '$id_usu' , '$nome_projeto');";

$resultado = mysqli_query($conn, $insert);

mysqli_close($conn);

header("Location: ../view/tela_projetos.php");
?>