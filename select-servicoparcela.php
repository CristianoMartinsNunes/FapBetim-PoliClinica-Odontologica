<?php include("heard-servicoparcela.php");?>
<?php include("connection.php");?>
<?php include("crud-servicoparcela.php");?>


<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
	<h1> <p class="text-danger"> Cadastro da Parcela excluido c/sucesso!!! </p> </h1>
<?php
	}
?>

  <h1><b>Lista de Parcela(s)</h1><b><br><br>

<table class="table table-striped table-bordered">

		<tr>
			<th> Nº Ordem Serviço</th>
			<th> Código </th>
			<th> Nome </th>
			<th> Nº CPF </th>
			<th> Número Parcela </th>
			<th> Histórico Parcela</th>
			<th> Valor Parcela (R$) </th>
			<th> Data Vencimento </th>
			<th> Valor Pago (R$) </th>
			<th> Data Pagamento </th>		
			<th> Observações </th>		
			<th> Status Paciente </th>		
			<th> Data Cadastro </th>		
			<th> Função 01</th>
			<th> Função 02</th>

		</tr>


	<?php
		$servicoParcelas = selectServicoParcela($conexao);
		foreach ($servicoParcelas as $servicoParcela) :
	?>
		<tr>
			<td><?= $servicoParcela['IDSERVICO'] ?></td>
			<td><?= $servicoParcela['ID'] ?></td>
			<td><?= $servicoParcela['NOME'] ?></td>
			<td><?= $servicoParcela['CPF'] ?></td>
			
			

			<td><?= $servicoParcela['NUMEROPARCELA'] ?></td>
			<td><?= $servicoParcela['HISTORICO'] ?></td>
			<td><?= $servicoParcela['VALORPARCELA'] ?></td>
			<td><?= $servicoParcela['DTVENCIMENTO'] ?></td>
			<td><?= $servicoParcela['VALORPAGO'] ?></td>
			<td><?= $servicoParcela['DTPAGAMENTO'] ?></td>
			<td><?= $servicoParcela['OBSERVACAO'] ?></td>
			<td><?= $servicoParcela['STATUSPACIENTE'] ?></td>
			<td><?= $servicoParcela['DTCAD'] ?></td>


			<td>
				<a class = "btn btn-primary" href="form-update-servicoparcela.php?id=<?=$servicoParcela['ID']?>">Editar</a>
			</td>



			<td>
				<form action="delete-servicoparcela.php" method = "post">
					<input type="hidden" name="id" value="<?=$servicoParcela['IDSERVICO']?>">
					<button class="btn btn-danger">Excluir</button> 
				</form>
			</td>



		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>