<?php include("heard-relatorio.php");?>

  <h1><b>Relatório 04 - Listar Pagamento de Serviço p/período</h1><b><br><br>
    
    <form action="relatorio-select-pagamento.php" method="post">

      <table class="table">

        <tr> 
          <td><b>Informe a Data Inicial: </td>  
        	<td> <input class="form-control" type="date" 
                name="data1" required autofocus/><br/></td>
        </tr>

        <tr> 
          <td><b>Informe a Data Final: </td>  
          <td> <input class="form-control" type="date" 
                name="data2" required autofocus/><br/></td>
        </tr>


		<tr>
		  <td><input class="btn btn-primary" type="submit" value="Imprimir"/>
              <input class="btn btn-primary" type="reset"  value="Limpar"/>
          </td>
          <td> </td>  
		</tr>

      </table>
    </form>

<?php include("footer.php");?>