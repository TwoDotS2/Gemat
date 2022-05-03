<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 
$id_projeto = mysqli_real_escape_string($conn, $_POST['id_projeto']);
$delete = "DELETE FROM projetos where id_projeto = '$id_projeto';";
mysqli_query($conn, $delete);
mysqli_close($conn);

echo json_encode('');
?>