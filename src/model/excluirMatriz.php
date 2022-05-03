<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 

$id_matriz = mysqli_real_escape_string($conn, $_POST['id_matriz']);
$delete = "DELETE FROM matrizes where id_matriz = '$id_matriz';";
mysqli_query($conn, $delete);
mysqli_close($conn);

echo json_encode('');
?>