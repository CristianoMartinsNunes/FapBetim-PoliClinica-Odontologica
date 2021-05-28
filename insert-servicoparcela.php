<?php include("heard-servicoparcela.php");?>
<?php include("connection.php");?>
<?php include("crud-servicoparcela.php");?>


<?php

	$id = $_POST["id"];
     $cpf = $_POST["cpf"];
     $nome = $_POST["nome"];
     $data = $_POST["data"];
     $codservico = $_POST["codservico"];
     $nomeservico = $_POST["nomeservico"];
     $qnt = $_POST["qnt"];
     $desconto = $_POST["desconto"];
     $total = $_POST["total"];
     $valor = $_POST["valor"];
     $liquido = $_POST["liquido"];
     $parcela = $_POST["parcela"];
     $numero = $_POST["numero"];

	if(insertServicoParcela($conexao, $id)){?>

		<h1><p class="text-success">Cadastro da Parcela(s) gravado c/sucesso!!! </p></h1><br><br> 

		<table class="table">
			<tr> 
          		<td><b>Número Ordem de Serviço:  </b><?= $id;?></td>
          	</tr>

               <tr> 
                    <td><b>Número do CPF:  </b><?= $cpf;?></td>
               </tr>

			<tr> 
          		<td><b>Nome Completo:  </b><?= $nome;?></td>
          	</tr>			
			
               <tr> 
                    <td><b>Código Serviço:  </b><?= $codservico;?></td>
               </tr>    

               <tr> 
                    <td><b>Nome Serviço:  </b><?= $nomeservico;?></td>
               </tr> 

               <tr> 
                    <td><b>Quantidade:  </b><?= $qnt;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Serviço (R$):  </b><?= $valor;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Total (R$):  </b><?= $total;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Descontno (R$):  </b><?= $desconto;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Líquido (R$):  </b><?= $liquido;?></td>
               </tr> 

               <tr> 
                    <td><b>Número de Parcela(s):  </b><?= $numero;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Parcela (R$):  </b><?= $parcela;?></td>
               </tr> 

               <tr> 
                    <td><b>Data do Serviço:  </b><?= $data;?></td>
               </tr>


		</table>

	<?php } else { 

		$msg = mysqli_error($conexao);
	?>

	<h1><p class="text-danger">Atenção: Cadastro da Parcela(s) não gravado na base de dados!!! </p></h1><br><br> 

          <table class="table">
               <tr> 
                    <td><b>Número Ordem de Serviço:  </b><?= $id;?></td>
               </tr>

               <tr> 
                    <td><b>Número do CPF:  </b><?= $cpf;?></td>
               </tr>

               <tr> 
                    <td><b>Nome Completo:  </b><?= $nome;?></td>
               </tr>               
               
               <tr> 
                    <td><b>Código Serviço:  </b><?= $codservico;?></td>
               </tr>    

               <tr> 
                    <td><b>Nome Serviço:  </b><?= $nomeservico;?></td>
               </tr> 

               <tr> 
                    <td><b>Quantidade:  </b><?= $qnt;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Serviço (R$):  </b><?= $valor;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Total (R$):  </b><?= $total;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Descontno (R$):  </b><?= $desconto;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Líquido (R$):  </b><?= $liquido;?></td>
               </tr> 

               <tr> 
                    <td><b>Número de Parcela(s):  </b><?= $numero;?></td>
               </tr> 

               <tr> 
                    <td><b>Valor Parcela (R$):  </b><?= $parcela;?></td>
               </tr> 

               <tr> 
                    <td><b>Data do Serviço:  </b><?= $data;?></td>
               </tr>


          </table>

    <?php
		}
    ?>

<?php include("footer.php");?>
