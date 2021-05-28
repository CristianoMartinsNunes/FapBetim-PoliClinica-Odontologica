<?php include("heard-servicoparcela.php");?>
<?php include("connection.php");?>
<?php include("crud-servicoparcela.php");


    $id = $_GET['id'];
    $servicoParcela = selectUpdateServicoParcela($conexao, $id);

?>

  <h1><b>Formulário de Edição de Cadastro de Parcela</h1><b><br><br>
    
    <form action="update-servicoparcela.php" method="post">

      <input type="hidden" name="id" value="<?=$servicoParcela['ID']?>">

      <table class="table">

        <tr> 
          <td><b>Código: </td>  
        	<td> <input class="form-control" type="text" name="codigo" value="<?=$servicoParcela['ID']?>" autofocus/><br/></td>
        </tr>
            
        <tr>  
          <td><b>N° Ordem Serviço: </td>  
          <td> <input class="form-control" type="text" name="numeroos" value="<?=$servicoParcela['IDSERVICO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Número CPF: </td>  
          <td> <input class="form-control" type="text" name="cpf" value="<?=$servicoParcela['CPF']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Número Parcela: </td>  
          <td> <input class="form-control" type="text" name="numeroparcela" value="<?=$servicoParcela['NUMEROPARCELA']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Histórico Parcela: </td>  
          <td> <input class="form-control" type="text" name="historico" value="<?=$servicoParcela['HISTORICO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Valor Parcela (R$): </td>  
          <td> <input class="form-control" type="text" name="valorparcela" value="<?=$servicoParcela['VALORPARCELA']?>" /><br/></td>
        </tr>


        <tr>  
          <td><b>Data Vencimento: </td>  
          <td> <input class="form-control" type="text" name="vencimento" value="<?=$servicoParcela['DTVENCIMENTO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Valor Pago (R$): </td>  
          <td> <input class="form-control" type="text" name="valorpago" value="<?=$servicoParcela['VALORPAGO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Data Pagamento: </td>  
          <td> <input class="form-control" type="text" name="datapagamento" value="<?=$servicoParcela['DTPAGAMENTO']?>" /><br/></td>
        </tr>


        <tr>  
          <td><b>Observações: </td>  
          <td> <input class="form-control" type="text" name="obs" value="<?=$servicoParcela['OBSERVACAO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Status Paciente: </td>  
          <td> <input class="form-control" type="text" name="status" value="<?=$servicoParcela['STATUSPACIENTE']?>" /><br/></td>
        </tr>


		<tr>
		  <td><input class="btn btn-primary" type="submit" value="Gravar"/>
              
          </td>
          <td> </td>  
		</tr>

      </table>
    </form>

<?php include("footer.php");?>