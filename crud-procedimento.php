<?php 

	function insertProcedimento($conexao, $codcategoria, $nomecategoria, $codservico, $nomeservico, $valor){

		$query = "INSERT INTO PROCEDIMENTO (CODCATEGORIA, NOMECATEGORIA, CODSERVICO, NOMESERVICO, VALOR)
		               VALUES ('{$codcategoria}', '{$nomecategoria}', '{$codservico}', '{$nomeservico}','{$valor}')";

	    return mysqli_query($conexao,$query);
    }


	function selectProcedimento($conexao){

		$procedimentos = array();

		$query = "SELECT * FROM PROCEDIMENTO ORDER BY CODCATEGORIA, ID";
		
		$resultado = mysqli_query($conexao, $query);
		
		while ($procedimento = mysqli_fetch_assoc($resultado))
		      {
					array_push($procedimentos, $procedimento);
			  }
		return $procedimentos;
	}


	function updateProcedimento($conexao, $id, $codcategoria, $nomecategoria, $codservico, $nomeservico, $valor){

		$query = "UPDATE PROCEDIMENTO SET CODCATEGORIA = '{$codcategoria}', NOMECATEGORIA = '{$nomecategoria}', CODSERVICO = '{$codservico}',  NOMESERVICO = '{$nomeservico}', VALOR = '{$valor}' WHERE ID = '{$id}'";
		return mysqli_query($conexao, $query);
	}


	function selectUpdateProcedimento($conexao, $id){
	
		$query = "SELECT * FROM PROCEDIMENTO WHERE ID = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}


?>

