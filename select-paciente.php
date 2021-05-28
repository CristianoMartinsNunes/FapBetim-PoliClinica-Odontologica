<?php include("heard-paciente.php");?>
<?php include("connection.php");?>
<?php include("crud-paciente.php");?>


<?php
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
	<p class="text-success"> Produto Removido!!!</p>
<?php
	}
?>

  <h1><b>Lista de Paciente(s)</h1><b><br><br>

<table class="table table-striped table-bordered">

		<tr>
			<th> Código </th>
			<th> Nome </th>
			<th> Sexo </th>
			<th> Nº CPF </th>
			<th> Nascimento </th>
			<th> Endereço </th>
			<th> Tel. Móvel </th>
			<th> Tel. Fixo </th>
			<th> Tel. Comercial </th>
			<th> E-mail </th>
			<th> Data Cadastro </th>
			<th> Função 01 </th>
		</tr>


	<?php
		$pacientes = selectPaciente($conexao);
		foreach ($pacientes as $paciente) :
	?>
		<tr>
			<td><?= $paciente['ID'] ?></td>
			<td><?= $paciente['NOME'] ?></td>
			<td><?= $paciente['SEXO'] ?></td>
			<td><?= $paciente['CPF'] ?></td>
			<td><?= $paciente['DTNASC'] ?></td>
			<td><?= $paciente['ENDERECO'] ?></td>
			<td><?= $paciente['TELMOVEL'] ?></td>
			<td><?= $paciente['TELFIXO'] ?></td>
			<td><?= $paciente['TELCOMERCIAL'] ?></td>
			<td><?= $paciente['EMAIL'] ?></td>
			<td><?= $paciente['DTCAD'] ?></td>

			<td><a class = "btn btn-primary" href="form-update-paciente.php?id=<?=$paciente['ID']?>">Editar</a></td>


		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>