<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_setor'])){
	header("Location: ../view/tela_setores.php");
	exit();
};

$id_projeto = $_SESSION['id_projeto'];
$nome_setor = mysqli_real_escape_string($conn, $_POST['nome_setor']);

$insert =  "INSERT INTO setores(id_projeto, nome_setor) VALUES( '$id_projeto' , '$nome_setor');";

$resultado = mysqli_query($conn, $insert);

mysqli_close($conn);

header("Location: ../view/tela_setores.php");
?>