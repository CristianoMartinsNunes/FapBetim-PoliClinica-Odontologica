<?php 
	
	include("heard-servicoparcela.php");
	include("connection.php");
	include("crud-servicoparcela.php");

	$id = $_POST['id'];
	deleteServicoParcela($conexao,$id);
	header("Location: select-servicoparcela.php?removido=true");
	die();

?>