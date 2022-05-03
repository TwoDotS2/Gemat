<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

$id_setor = $_SESSION['id_setor'];
$select1 = "SELECT id_matriz, nome_matriz, baia, st_genealogico, data, descricao, reg_sis from matrizes WHERE id_setor ='$id_setor' ORDER BY nome_matriz;";
$resultado = mysqli_query($conn, $select1);
$matrizes = $resultado->fetch_all();

mysqli_close($conn);

echo json_encode($matrizes);			
?>