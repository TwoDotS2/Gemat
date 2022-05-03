<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

$id_projeto = $_SESSION['id_projeto'];
$select1 = "SELECT id_setor, nome_setor from setores where id_projeto= '$id_projeto';";
$resultado = mysqli_query($conn, $select1);
$setores = $resultado->fetch_all();

echo json_encode($setores);

mysqli_close($conn);			
?>