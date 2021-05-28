<?php include("heard-servicoparcela.php");?>
<?php include("connection.php");?>
<?php include("crud-servicoparcela.php");?>

<?php
	
	$id = $_POST["id"];
	
     $codigo = $_POST["codigo"];
	$numeroos = $_POST["numeroos"];
     $cpf = $_POST["cpf"];
     $numeroparcela  = $_POST["numeroparcela"];
     $historico  = $_POST["historico"];
     $valorparcela = $_POST["valorparcela"];
     $vencimento = $_POST["vencimento"]; 
     $valorpago = $_POST["valorpago"];
     $datapagamento = $_POST["datapagamento"];
     $obs = $_POST["obs"];
     $status = $_POST["status"];

	if(updateServicoParcela($conexao, $id, $codigo, $numeroos, $cpf, $numeroparcela, $historico, $valorparcela, $vencimento, $valorpago, $datapagamento,  $obs, $status)){?>

		<h1><p class="text-success">Cadastro da Parcela editado c/sucesso!!! </p></h1><br><br> 

		<table class="table">
			<tr> 
          		<td><b>Número do CPF:  </b><?= $cpf;?></td>
          	</tr>			
			<tr> 
          		<td><b>Número Ordem Serviço:  </b><?= $numeroos;?></td>
          	</tr>			
			<tr> 
          		<td><b>Número Parcela:  </b><?= $numeroparcela;?></td>
          	</tr>			
			<tr> 
          		<td><b>Histórico Parcela: </b><?= $historico;?></td>
          	</tr>

               <tr> 
                    <td><b>Valor Parcela (R$): </b><?= $valorparcela;?></td>
               </tr>

			<tr> 
          		<td><b>Data Vencimento: </b><?= $vencimento;?></td>
          	</tr>


               <tr> 
                    <td><b>Valor Pago (R$): </b><?= $valorpago;?></td>
               </tr>

               <tr> 
                    <td><b>Data Pagamento: </b><?= $datapagamento;?></td>
               </tr>

               <tr> 
                    <td><b>Observações: </b><?= $obs;?></td>
               </tr>

               <tr> 
                    <td><b>Status Paciente: </b><?= $status;?></td>
               </tr>


		</table>

	<?php } else { 

		$msg = mysqli_error($conexao);
	?>

	<h1><p class="text-danger">Atenção: Cadastro da Parcela não editado na base de dados!!! </p></h1><br><br> 

          <table class="table">
               <tr> 
                    <td><b>Número do CPF:  </b><?= $cpf;?></td>
               </tr>               
               <tr> 
                    <td><b>Código do Serviço:  </b><?= $cpf;?></td>
               </tr>               
               <tr> 
                    <td><b>Quantidade:  </b><?= $cpf;?></td>
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
