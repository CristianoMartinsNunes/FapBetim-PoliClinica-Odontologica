<?php 

	function selectServico($conexao){

		$servicos = array();

		$query = "SELECT * FROM V_PACIENTE_SERVICO_PROCEDIMENTO 
		          ORDER BY ID DESC";
		
		$resultado = mysqli_query($conexao, $query);
		
		while ($servico = mysqli_fetch_assoc($resultado))
		      {
					array_push($servicos, $servico);
			  }
		return $servicos;
	}

	function insertServico($conexao, $cpf, $codservico, $quantidade, $numeroparcela, $valordesconto, $data){

		$query = "INSERT INTO SERVICO (CPF,CODSERVICO,QUANTIDADE,NUMEROPARCELA,VALORDESCONTO,DTSERVICO)	
		               VALUES ('{$cpf}','{$codservico}','{$quantidade}', 
		               '{$numeroparcela}','{$valordesconto}',now())";

	    return mysqli_query($conexao,$query);
    }


	function updateServico($conexao, $id, $cpf, $codservico, $quantidade, $numeroparcela, 
		                   $valordesconto, $data){

		$query = "UPDATE SERVICO SET CPF = '{$cpf}', 
		                      CODSERVICO = '{$codservico}',
		                      QUANTIDADE = '{$quantidade}', 
		                      NUMEROPARCELA = '{$numeroparcela}',
		                      VALORDESCONTO = '{$valordesconto}',
		                      DTSERVICO = NOW()
		                WHERE ID = '{$id}'";
		return mysqli_query($conexao, $query);
	}


	function selectUpdateServico($conexao, $id){
	
		$query = "SELECT * FROM SERVICO WHERE ID = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}


	function deleteServico($conexao,$id){

		$query = "DELETE FROM SERVICO WHERE ID = '{$id}'";

		$query1 = "DELETE FROM SERVICOPARCELA WHERE IDSERVICO = '{$id}' AND VALORPAGO IS NULL";

		mysqli_query($conexao, $query1);

		return mysqli_query($conexao, $query);
}



?>

