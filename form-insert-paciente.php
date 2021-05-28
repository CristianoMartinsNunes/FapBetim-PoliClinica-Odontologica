<?php include("heard-paciente.php");?>

  <h1><b>Formulário de Cadastro de Paciente</h1><b><br><br>
    
    <form action="insert-paciente.php" method="post">

      <table class="table">

        <tr> 
          <td><b>Nome Completo: </td>  
        	<td> <input class="form-control" type="text" placeholder="EX.: CRISTIANO MARTINS NUNES" name="nome" autofocus/><br/></td>
        </tr>
            
        <tr>  
          <td><b>Sexo: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: F ou M" name="sexo"/><br/></td>
        </tr>

        <tr>  
          <td><b>Data de Nascimento: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2019-12-31 (AAA-MM-DD)" name="nascimento"/><br/></td>
        </tr>

        <tr>  
          <td><b>Número do CPF: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 12300012300 (11 dígitos do Cpf)" name="cpf" required pattern="[0-9]+$"/><br/></td>
        </tr>

        <tr>  
          <td><b>Endereço: </td>  
            <td> <input class="form-control" type="text" placeholder="EX.: Logradouro, Número, Complemento, Localidade\UF, Cep" name="endereco"/><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Móvel: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 031999370320 (DDD+9+Número)" name="telMovel" required pattern="[0-9]+$"/><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Fixo: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 03732128295 (DDD+3+Número)" name="telFixo" required pattern="[0-9]+$"/><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Comercial: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 0313121019000 (DDD+3+Número)" name="telComercial" required pattern="[0-9]+$"/><br/></td>
        </tr>

        <tr>  
          <td><b>E-mail: </td>  
          <td> <input class="form-control" type="email" placeholder="EX.: fapbetim@pitagoras.com.br" name="email"/><br/>
          </td>
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