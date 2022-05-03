<?php
session_start();

$id_setor = $_POST['id_setor'];
$_SESSION['id_setor'] = $id_setor;

echo json_encode('');
?>