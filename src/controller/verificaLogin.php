<?php
session_start();
if(!$_SESSION['nome_usu']){
	header('Location: ../../index.php');
	exit();
}
?>