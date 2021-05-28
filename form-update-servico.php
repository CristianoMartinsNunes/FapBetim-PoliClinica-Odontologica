<?php include("heard-servico.php");?>
<?php include("connection.php");?>
<?php include("crud-servico.php");

    $id = $_GET['id'];
    $servico = selectUpdateServico($conexao, $id);

?>

  <h1><b>Formulário de Edição de Cadastro de Serviço</h1><b><br><br>
    
    <form action="update-servico.php" method="post">

      <input type="hidden" name="id" value="<?=$servico['ID']?>">

      <table class="table">

      	<tr>  
          <td><b>Número do CPF: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 12300012300 (11 dígitos do Cpf)" name="cpf" value="<?=$servico['CPF']?>" required pattern="[0-9]+$"/><br/></td>
        </tr>


        <tr>  
          <td><b>Código do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2010" 
            name="codservico" value="<?=$servico['CODSERVICO']?>" required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Quantidade: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 1"
                name="quantidade" value="<?=$servico['QUANTIDADE']?>" required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Número de Parcela(s): </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 1" 
            name="numeroparcela" value="<?=$servico['NUMEROPARCELA']?>" required pattern="[0-9]+$" /><br/></td>
        </tr>


        <tr>  
          <td><b>Valor Desconto (R$): </td>  
            <td> <input class="form-control" type="text" placeholder="EX.: 150.99" 
              value="<?=$servico['VALORDESCONTO']?>" name="valordesconto"/><br/></td>
        </tr>


        <tr>  
          <td><b>Data do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2019-12-31 (AAA-MM-DD)" name="data" value="<?=$servico['DTSERVICO']?>" /><br/></td>
        </tr>



		<tr>
		  <td><input class="btn btn-primary" type="submit" value="Gravar"/>
              <input class="btn btn-primary" type="reset"  value="Limpar"/>
          </td>
          <td> </td>  
		</tr>

      </table>
    </form>

<?php include("footer.php");?>