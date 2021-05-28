<?php 
	
	include("heard-servico.php");
	include("connection.php");
	include("crud-servico.php");

	$id = $_POST['id'];
	deleteServico($conexao,$id);
	header("Location: select-servico.php?removido=true");
	die();

?>