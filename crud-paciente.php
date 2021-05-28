<?php

	function insertPaciente($conexao, $nome, $sexo, $nascimento, $cpf, $endereco, $telMovel, $telFixo, $telComercial, $email){

		$query = "INSERT INTO PACIENTE (NOME, SEXO, DTNASC, CPF, ENDERECO, TELMOVEL, TELFIXO, TELCOMERCIAL, EMAIL, DTCAD)
		               VALUES ('{$nome}','{$sexo}','{$nascimento}','{$cpf}','{$endereco}','{$telMovel}',
		               '{$telFixo}','{$telComercial}','{$email}', NOW())";

	    return mysqli_query($conexao,$query);
    }


	function selectPaciente($conexao){

		$pacientes = array();
		$query = "SELECT * FROM PACIENTE ORDER BY NOME";
		$resultado = mysqli_query($conexao, $query);
		
		while ($paciente = mysqli_fetch_assoc($resultado)) 
			  {
					array_push($pacientes, $paciente);
			   }
		return $pacientes;
	}

	function updatePaciente($conexao, $id, $nome, $sexo, $nascimento, $endereco, $telMovel, $telFixo, $telComercial, $email){

		$query = "UPDATE PACIENTE SET NOME = '{$nome}', SEXO = '{$sexo}', DTNASC = '{$nascimento}',  ENDERECO = '{$endereco}', TELMOVEL = '{$telMovel}',
		               TELFIXO = '{$telFixo}', TELCOMERCIAL = '{$telComercial}', EMAIL = '{$email}', DTCAD = NOW()
		               WHERE ID = '{$id}'";
		return mysqli_query($conexao, $query);
	}


	function selectUpdatePaciente($conexao, $id){
	
		$query = "SELECT * FROM PACIENTE WHERE ID = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}




/*
function listaProduto($conexao){

	$produtos = array();
	$resultado = mysqli_query($conexao,"SELECT p.*, c.nome as categoria_nome FROM PRODUTO as p inner join categoria as c on c.id=p.id_categoria");

	while ($produto = mysqli_fetch_assoc($resultado)) 
	{	
		array_push($produtos, $produto);
	}

	return $produtos;
}

function removeProduto($conexao,$id){

	$query = "DELETE FROM PRODUTO WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
	$query = "SELECT * FROM PRODUTO WHERE ID = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "update produto set nome ='{$nome}', preco = {$preco}, descricao = '{$descricao}', id_categoria = {$categoria_id}, usado = {$usado} where id = '{$id}'";

	return mysqli_query($conexao, $query);
}

*/

?>