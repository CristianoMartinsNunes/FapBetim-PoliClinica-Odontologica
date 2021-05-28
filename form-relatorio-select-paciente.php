<?php include("heard-relatorio.php");?>

  <h1><b>Relatório 01 - Listar um Paciente</h1><b><br><br>
    
    <form action="relatorio-select-paciente.php" method="post">

      <table class="table">

        <tr> 
          <td><b>Informe o Nº do CPF: </td>  
        	<td> <input class="form-control" type="text" placeholder="EX.: 12300012300 (11 dígitos do Cpf)" name="cpf" required pattern="[0-9]+$"/><br/></td>
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