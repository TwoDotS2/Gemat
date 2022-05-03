<?php
session_start();

$id_projeto = $_POST['id_projeto'];
$_SESSION['id_projeto'] = $id_projeto;

echo json_encode('');
?>