<?php include("heard-servico.php");?>
<?php include("connection.php");?>
<?php include("crud-servico.php");?>



  <h1><b>Formulário de Cadastro de Serviço</h1><b><br><br>
    
    <form action="insert-servico.php" method="post">

      <table class="table">

      	<tr>  
          <td><b>Número do CPF: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 12300012300 (11 dígitos do Cpf)" name="cpf" required pattern="[0-9]+$"/><br/></td>
        </tr>


        <tr>  
          <td><b>Código do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2010" name="codservico" required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Quantidade: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 1" name="quantidade" required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Número de Parcela(s): </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 1" name="numeroparcela" required pattern="[0-9]+$" /><br/></td>
        </tr>


        <tr>  
          <td><b>Valor Desconto (R$): </td>  
            <td> <input class="form-control" type="text" placeholder="EX.: 150.99" name="valordesconto"/><br/></td>
        </tr>


        <tr>  
          <td><b>Data do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2019-12-31 (AAA-MM-DD)" name="data"/><br/></td>
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