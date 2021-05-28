<?php

	function selectPacientes($conexao){

		$pacientes = array();
		$query = "SELECT * FROM PACIENTE ORDER BY NOME";
		$resultado = mysqli_query($conexao, $query);
		
		while ($paciente = mysqli_fetch_assoc($resultado)) 
			  {
					array_push($pacientes, $paciente);
			   }
		return $pacientes;
	}

	function selectPaciente($conexao,$cpf){

		$pacientes = array();
		$query = "SELECT * FROM PACIENTE WHERE CPF = '{$cpf}'";
		$resultado = mysqli_query($conexao, $query);
		
		while ($paciente = mysqli_fetch_assoc($resultado)) 
			  {
					array_push($pacientes, $paciente);
			   }
		return $pacientes;
	}

	function selectPagamentos($conexao,$data1,$data2){

		$pacientes = array();
		$query = "SELECT * FROM SERVICOPARCELA 
		                  WHERE DTPAGAMENTO BETWEEN '{$data1}' AND '{$data2}'
		                  AND VALORPAGO IS NOT NULL
		                  ORDER BY DTVENCIMENTO, VALORPAGO";


		$resultado = mysqli_query($conexao, $query);
		
		while ($paciente = mysqli_fetch_assoc($resultado)) 
			  {
					array_push($pacientes, $paciente);
			   }
		return $pacientes;
	}


  ?>	