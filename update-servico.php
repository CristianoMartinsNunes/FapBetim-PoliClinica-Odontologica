<?php include("heard-servico.php");?>
<?php include("connection.php");?>
<?php include("crud-servico.php");?>

<?php
	
	$id = $_POST["id"];
	$cpf = $_POST["cpf"];
	$codservico = $_POST["codservico"];
	$quantidade = $_POST["quantidade"];
	$numeroparcela  = $_POST["numeroparcela"];
	$valordesconto = $_POST["valordesconto"];
     $data = $_POST["data"];

	if(updateServico($conexao, $id, $cpf, $codservico, $quantidade, $numeroparcela, $valordesconto, $data)){?>

		<h1><p class="text-success">Cadastro do Serviço editado c/sucesso!!! </p></h1><br><br> 

		<table class="table">
			<tr> 
          		<td><b>Número do CPF:  </b><?= $cpf;?></td>
          	</tr>			
			<tr> 
          		<td><b>Código do Serviço:  </b><?= $codservico;?></td>
          	</tr>			
			<tr> 
          		<td><b>Quantidade:  </b><?= $quantidade;?></td>
          	</tr>			
			<tr> 
          		<td><b>Número de Parcela(s): </b><?= $numeroparcela;?></td>
          	</tr>

               <tr> 
                    <td><b>Valor Desconto (R$): </b><?= $valordesconto;?></td>
               </tr>


			<tr> 
          		<td><b>Data do Serviço: </b><?= $data;?></td>
          	</tr>

		</table>

	<?php } else { 

		$msg = mysqli_error($conexao);
	?>

	<h1><p class="text-danger">Atenção: Cadastro do Paciente não editado na base de dados!!! </p></h1><br><br> 

          <table class="table">
               <tr> 
                    <td><b>Número do CPF:  </b><?= $cpf;?></td>
               </tr>               
               <tr> 
                    <td><b>Código do Serviço:  </b><?= $codservico;?></td>
               </tr>               
               <tr> 
                    <td><b>Quantidade:  </b><?= $quantidade;?></td>
               </tr>               
               <tr> 
                    <td><b>Número de Parcela(s): </b><?= 'X-X-X';?></td>
               </tr>

               <tr> 
                    <td><b>Valor Desconto (R$): </b><?= 'X-X-X';?></td>
               </tr>


               <tr> 
                    <td><b>Data do Serviço: </b><?= 'X-X-X';?></td>
               </tr>

          </table>


    <?php
		}
    ?>

<?php include("footer.php");?>
