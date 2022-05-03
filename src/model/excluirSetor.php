<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 
$id_setor = mysqli_real_escape_string($conn, $_POST['id_setor']);
$delete = "DELETE FROM setores where id_setor = '$id_setor';";
mysqli_query($conn, $delete);
mysqli_close($conn);

echo json_encode('');
?>