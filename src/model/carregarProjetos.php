<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

$array_to_string = implode(",", $_SESSION['id_usuario']);
$id_usu = $array_to_string;
$select1 = "SELECT id_projeto, nome_projeto from projetos where id_usu= '$id_usu';" ;
$resultado = mysqli_query($conn, $select1);
$projetos = $resultado->fetch_all();

mysqli_close($conn);

echo json_encode($projetos);
		
?>