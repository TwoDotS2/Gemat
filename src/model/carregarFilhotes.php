<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

$id_matriz = $_SESSION['id_matriz'];
$select1 = "SELECT id_filhote, nome_filhote, massa, descricao from filhotes WHERE id_matriz ='$id_matriz';";
$resultado = mysqli_query($conn, $select1);
$filhotes = $resultado->fetch_all();

echo json_encode($filhotes);

mysqli_close($conn);			
?>