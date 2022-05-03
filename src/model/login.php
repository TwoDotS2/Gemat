<?php 
session_start ();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

if(empty($_POST['nome_usu']) || empty($_POST['senha'])){
	header("Location: ../../index.php");
	exit();
};
$nome_usu = mysqli_real_escape_string($conn, $_POST['nome_usu']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$select1 = "SELECT * from usuarios where nome_usu= '$nome_usu' AND senha = '$senha'";
$resultado = mysqli_query($conn, $select1);
$validar = mysqli_num_rows($resultado);

if($validar == 1){
	
	$select2 = "SELECT id_usu from usuarios where nome_usu= '$nome_usu'";
	$resultado = mysqli_query($conn, $select2);
	$id_usu = $resultado->fetch_row();
	
	mysqli_close($conn);
	
	$_SESSION['nome_usu'] = $nome_usu;
	$_SESSION['id_usuario'] = $id_usu;
	
	header('Location: ../view/tela_projetos.php');
	
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	mysqli_close($conn);
	
	header('Location: ../../index.php');
	
	exit();
}

?>

