<?php include("heard-servico.php");?>
<?php include("connection.php");?>
<?php include("crud-servico.php");?>


<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
	<h1><p class="text-danger"> Cadastro do Servico excluido c/sucesso!!! </p></h1>
<?php
	}
?>

  <h1><b>Lista de Serviço(s)</h1><b><br><br>

<table class="table table-striped table-bordered">

		<tr>
			
			<th> Nº Ordem Serviço </th>
			<th> Código </th>
			<th> Nome </th>
			<th> Nº CPF </th>
			<th> Data/Hora Serviço </th>

			<th> Código Categoria </th>
			<th> Nome Categoria </th>
			<th> Código Serviço </th>
			<th> Nome Serviço </th>
			<th> Quantidade</th>
			<th> Valor Unidade (R$) </th>			
			<th> Valor Total (R$) </th>
			<th> Valor Desconto (R$) </th>
			<th> Valor Líquido (R$) </th>
			<th> Nº de Parcela(s) </th>
			<th> Valor Parcela (R$)</th>
			<th> Função 01</th>
			<th> Função 02</th>
			<th> Função 03</th>
		</tr>


	<?php
		$servicos = selectServico($conexao);
		foreach ($servicos as $servico) :
	?>
		<tr>

			<td><?= $servico['ID'] ?></td>
			<td><?= $servico['CODIGOPACIENTE'] ?></td>
			<td><?= $servico['NOME'] ?></td>
			<td><?= $servico['CPF'] ?></td>
			<td><?= $servico['DTSERVICO'] ?></td>
			
			<td><?= $servico['CODCATEGORIA'] ?></td>
			<td><?= $servico['NOMECATEGORIA'] ?></td>
			<td><?= $servico['CODSERVICO'] ?></td>
			<td><?= $servico['NOMESERVICO'] ?></td>
			<td><?= $servico['QUANTIDADE'] ?></td>
			<td><?= $servico['VALOR'] ?></td>
			<td><?= $servico['VALORTOTAL'] ?></td>
			<td><?= $servico['VALORDESCONTO'] ?></td>
			<td><?= $servico['VALORLIQUIDO'] ?></td>
			<td><?= $servico['NUMEROPARCELA'] ?></td>
			<td><?= $servico['VALORPARCELA'] ?></td>



			<td>
				<a class = "btn btn-primary" href="form-update-servico.php?id=<?=$servico['ID']?>">Editar</a>
			</td>

			<td>
				<form action="delete-servico.php" method = "post">
					<input type="hidden" name="id" value="<?=$servico['ID']?>">
					<button class="btn btn-danger">Excluir</button> 
				</form>
			</td>




			<td>
				<form action="insert-servicoparcela.php" method = "post">
					
					<input type="hidden" name="id" value="<?=$servico['ID']?>">
					<input type="hidden" name="cpf" value="<?=$servico['CPF']?>">
					<input type="hidden" name="nome" value="<?=$servico['NOME']?>">
					<input type="hidden" name="data" value="<?=$servico['DTSERVICO']?>">
					<input type="hidden" name="codservico" value="<?=$servico['CODSERVICO']?>">
					<input type="hidden" name="nomeservico" value="<?=$servico['NOMESERVICO']?>">
					<input type="hidden" name="qnt" value="<?=$servico['QUANTIDADE']?>">
					<input type="hidden" name="desconto" value="<?=$servico['VALORDESCONTO']?>">
					<input type="hidden" name="total" value="<?=$servico['VALORTOTAL']?>">
					<input type="hidden" name="liquido" value="<?=$servico['VALORLIQUIDO']?>">
					<input type="hidden" name="valor" value="<?=$servico['VALOR']?>">
					<input type="hidden" name="numero" value="<?=$servico['NUMEROPARCELA']?>">
					<input type="hidden" name="parcela" value="<?=$servico['VALORPARCELA']?>">
					
					<button class="btn btn-success"> Gerar</button> 

				</form>
			</td>
		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>