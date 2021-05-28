<?php include("heard-procedimento.php");?>
<?php include("connection.php");?>
<?php include("crud-procedimento.php");?>


<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
	<p class="text-success"> Produto Removido!!!</p>
<?php
	}
?>

  <h1><b>Lista de Procedimento(s)</h1><b><br><br>

<table class="table table-striped table-bordered">

		<tr>
			<th> Código </th>
			<th> Código Categoria </th>
			<th> Nome Categoria </th>
			<th> Código Seriço </th>
			<th> Nome Serviço </th>
			<th> Valor (R$) </th>
			<th> Função 01 </th>
		</tr>


	<?php
		$procedimentos = selectProcedimento($conexao);
		foreach ($procedimentos as $procedimento) :
	?>
		<tr>
			<td><?= $procedimento['ID'] ?></td>
			<td><?= $procedimento['CODCATEGORIA'] ?></td>
			<td><?= $procedimento['NOMECATEGORIA'] ?></td>
			<td><?= $procedimento['CODSERVICO'] ?></td>
			<td><?= $procedimento['NOMESERVICO'] ?></td>
			<td><?= $procedimento['VALOR'] ?></td>

			<td><a class = "btn btn-primary" href="form-update-procedimento.php?id=<?=$procedimento['ID']?>">Editar</a></td>


		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>