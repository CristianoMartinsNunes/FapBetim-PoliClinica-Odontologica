<?php include("heard-paciente.php");?>
<?php include("connection.php");?>
<?php include("crud-paciente.php");?>
<?php

	$nome = $_POST["nome"];
	$sexo = $_POST["sexo"];
	$nascimento = $_POST["nascimento"];
	$cpf  = $_POST["cpf"];
	$endereco = $_POST["endereco"];
	$telMovel = $_POST["telMovel"];
	$telFixo = $_POST["telFixo"];
	$telComercial = $_POST["telComercial"];
	$email = $_POST["email"];


	if(insertPaciente($conexao, $nome, $sexo, $nascimento, $cpf, $endereco, $telMovel, $telFixo, $telComercial, $email)) {?>

		<h1><p class="text-success">Cadastro do Paciente gravado c/sucesso!!! </p></h1><br><br> 

		<table class="table">
			<tr> 
          		<td><b>Número do CPF:  </b><?= $cpf;?></td>
          	</tr>			
			<tr> 
          		<td><b>Nome Completo:  </b><?= $nome;?></td>
          	</tr>			
			<tr> 
          		<td><b>Sexo:  </b><?= $sexo;?></td>
          	</tr>			
			<tr> 
          		<td><b>Data de Nascimento:  </b><?= $nascimento;?></td>
          	</tr>			
			<tr> 
          		<td><b>Endereço:  </b><?= $endereco;?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Móvel:  </b><?= $telMovel;?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Fixo:  </b><?= $telFixo;?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Comercial:  </b><?= $telFixo;?></td>
          	</tr>
			<tr> 
          		<td><b>E-mail:  </b><?= $email;?></td>
          	</tr>
		</table>

	<?php } else { 

		$msg = mysqli_error($conexao);
	?>

	<h1><p class="text-danger">Atenção: Cadastro do Paciente não gravado na base de dados!!! </p></h1><br><br> 

		<table class="table">
			<tr> 
          		<td><b>Número do CPF:  </b><?= $cpf;?></td>
          	</tr>			
			<tr> 
          		<td><b>Nome Completo:  </b><?= $nome;?></td>
          	</tr>			
			<tr> 
          		<td><b>Sexo:  </b><?= 'X-X-X';?></td>
          	</tr>			
			<tr> 
          		<td><b>Data de Nascimento:  </b><?= 'X-X-X';?></td>
          	</tr>			
			<tr> 
          		<td><b>Endereço:  </b><?= 'X-X-X';?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Móvel:  </b><?= 'X-X-X';?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Fixo:  </b><?= 'X-X-X';?></td>
          	</tr>
			<tr> 
          		<td><b>Telefone Comercial:  </b><?= 'X-X-X';?></td>
          	</tr>
			<tr> 
          		<td><b>E-mail:  </b><?= 'X-X-X';?></td>
          	</tr>

			</tr>
			<tr> 
          		<td><b>Data de Cadastro:  </b><?= 'X-X-X';?></td>
          	</tr>


          	
		</table>



    <?php
		}
    ?>

<?php include("footer.php");?>
