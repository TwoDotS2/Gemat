<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_matriz']) || empty($_POST['baia']) || empty($_POST['st_genealogico']) || empty($_POST['data']) || empty($_POST['descricao'])){
	header("Location: ../view/tela_matrizes.php");
	exit();
};

$id_setor = $_SESSION['id_setor'];
$nome_matriz = mysqli_real_escape_string($conn, $_POST['nome_matriz']);
$baia = mysqli_real_escape_string($conn, $_POST['baia']);
$st_genealogico = mysqli_real_escape_string($conn, $_POST['st_genealogico']);
$data = mysqli_real_escape_string($conn, $_POST['data']);
$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);


$insert = "INSERT INTO matrizes(id_setor, nome_matriz, baia, st_genealogico, data, descricao, reg_sis) VALUES('$id_setor', '$nome_matriz', '$baia', '$st_genealogico', '$data', '$descricao', CURDATE())";

$resultado = mysqli_query($conn, $insert);

header("Location: ../view/tela_matrizes.php");

mysqli_close($conn);

?>