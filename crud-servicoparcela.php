<?php 


	function insertServicoParcela($conexao, $id){

		$query = "CALL SP_GERA_PARCELA('{$id}')";

	    return mysqli_query($conexao,$query);
    }


	function selectServicoParcela($conexao){

		$servicoParcelas = array();

		$query = "SELECT * FROM SERVICOPARCELA ORDER BY NOME, IDSERVICO, ID";
		
		$resultado = mysqli_query($conexao, $query);
		
		while ($servicoParcela = mysqli_fetch_assoc($resultado))
		      {
					array_push($servicoParcelas, $servicoParcela);
			  }
		return $servicoParcelas;
	}

	function deleteServicoParcela($conexao,$id){

		$query = "DELETE FROM SERVICOPARCELA WHERE IDSERVICO = '{$id}'";
		return mysqli_query($conexao, $query);
}


	function selectUpdateServicoParcela($conexao, $id){
	
		$query = "SELECT * FROM SERVICOPARCELA WHERE ID = '{$id}'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}



	function updateServicoParcela($conexao, $id, $codigo, $numeroos, $cpf, $numeroparcela, $historico, $valorparcela, $vencimento, $valorpago, $datapagamento,  $obs, $status){

		$query = "UPDATE SERVICOPARCELA SET VALORPAGO = '{$valorpago}',
		                                    OBSERVACAO = '{$obs}',
		                                    DTPAGAMENTO = NOW(),
		                                    STATUSPACIENTE = '{$status}',
		                                     DTCAD = NOW()

		                WHERE ID = '{$id}'";
		return mysqli_query($conexao, $query);
	}



?>

