<?php include("heard-procedimento.php");?>

  <h1><b>Formulário de Cadastro de Procedimento</h1><b><br><br>
    
    <form action="insert-procedimento.php" method="post">

      <table class="table">

        <tr> 
          <td><b>Código da Categoria: </td>  
        	<td> <input class="form-control" type="text" placeholder="EX.: C0123" name="codcategoria" autofocus/><br/></td>
        </tr>
          
        <tr>  
          <td><b>Nome da Categoria: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: EXAME CLÍNICO" name="nomecategoria"/><br/></td>
        </tr>

        <tr>  
          <td><b>Código do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2010" name="codservico" required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Nome do Seriço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: CONSULTA INICIAL" name="nomeservico" /><br/></td>
        </tr>

        <tr>  
          <td><b>Valor (R$): </td>  
            <td> <input class="form-control" type="text" placeholder="EX.: 150.99" name="valor"/><br/></td>
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