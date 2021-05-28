<?php include("heard-procedimento.php");?>
<?php include("connection.php");?>
<?php include("crud-procedimento.php");?>


<?php

	$id = $_POST["id"];

	$codcategoria = $_POST["codcategoria"];
	$nomecategoria = $_POST["nomecategoria"];
	$codservico = $_POST["codservico"];
	$nomeservico  = $_POST["nomeservico"];
	$valor = $_POST["valor"];


	if(updateProcedimento($conexao, $id, $codcategoria, $nomecategoria, $codservico, $nomeservico, $valor)){?>

	<h1><p class="text-success">Cadastro do Procedimento editado c/sucesso!!! </p></h1><br><br>

		<table class="table">
			<tr> 
          		<td><b>Código da Categoria:  </b><?= $codcategoria;?></td>
          	</tr>			
			<tr> 
          		<td><b>Nome da Categoria:  </b><?= $nomecategoria;?></td>
          	</tr>			
			<tr> 
          		<td><b>Código do Serviço:  </b><?= $codservico;?></td>
          	</tr>			
			<tr> 
          		<td><b>Nome do Serviço:  </b><?= $nomeservico;?></td>
          	</tr>			
			<tr> 
          		<td><b>Valor (R$): </b><?= $valor;?></td>
          	</tr>

		</table>




	<?php } else { 

		$msg = mysqli_error($conexao);
	?>

    
    <h1><p class="text-danger">Atenção: Cadastro do Procedimento não editado na base de dados!!! </p></h1><br><br> 

		<table class="table">
			
               <tr> 
          		<td><b>Código da Categoria:  </b><?= $codcategoria;?></td>
          	</tr>						

               <tr> 
                    <td><b>Nome da Categoria:  </b><?= $nomecategoria;?></td>
               </tr>               
               
               <tr> 
                    <td><b>Código do Serviço:  </b><?= 'X-X-X';?></td>
               </tr>               
               
               <tr> 
                    <td><b>Nome do Serviço:  </b><?= 'X-X-X';?></td>
               </tr>               
              
               <tr> 
                    <td><b>Valor (R$): </b><?= 'X-X-X';?></td>
               </tr>

			<tr> 
          		<td><b>Data de Cadastro:  </b><?= 'X-X-X';?></td>
          	</tr>
          	
		</table>



<?php
		}
?>

<?php include("footer.php");?>
