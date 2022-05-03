<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_filhote']) || empty($_POST['massa']) || empty($_POST['descricao'])){
	header("Location: ../view/tela_filhotes.php");
	exit();
};

$id_matriz = $_SESSION['id_matriz'];
$nome_filhote = mysqli_real_escape_string($conn, $_POST['nome_filhote']);
$massa = mysqli_real_escape_string($conn, $_POST['massa']);
$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);

$insert = "INSERT INTO filhotes(id_matriz, nome_filhote, massa, descricao) values( '$id_matriz', '$nome_filhote', '$massa', '$descricao')";

$resultado = mysqli_query($conn, $insert);

mysqli_close($conn);

header("Location: ../view/tela_filhotes.php");
?>