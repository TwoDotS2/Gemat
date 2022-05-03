<?php
include("conexao.php");


$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_usu']) || empty($_POST['senha']) || empty($_POST['email'])){
	header("Location: ../view/tela_cadastro.php");
	exit();
};

$nome_usu = mysqli_real_escape_string($conn, $_POST['nome_usu']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$insert = "INSERT INTO usuarios(nome_usu, email, senha) VALUES('$nome_usu', '$email', '$senha')";
$resultado = mysqli_query($conn, $insert);

mysqli_close($conn);

header('Location: ../../index.php');


?>