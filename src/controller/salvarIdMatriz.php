<?php
session_start();

$id_matriz = $_POST['id_matriz'];
$_SESSION['id_matriz'] = $id_matriz;

echo json_encode('');
?>