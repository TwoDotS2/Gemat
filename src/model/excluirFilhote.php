<?php
session_start();

include("conexao.php");

$conn = mysqli_connect( $hostname, $user, $password, $database ); 
$id_filhote = mysqli_real_escape_string($conn, $_POST['id_filhote']);
$delete = "DELETE FROM filhotes where id_filhote = '$id_filhote';";
mysqli_query($conn, $delete);
mysqli_close($conn);

echo json_encode('');
?>