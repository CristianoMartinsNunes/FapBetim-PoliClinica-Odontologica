<?php include("heard-paciente.php");?>
<?php include("connection.php");?>
<?php include("crud-paciente.php");


    $id = $_GET['id'];
    $paciente = selectUpdatePaciente($conexao, $id);

?>

  <h1><b>Formulário de Edição de Cadastro de Paciente</h1><b><br><br>
    
    <form action="update-paciente.php" method="post">

      <input type="hidden" name="id" value="<?=$paciente['ID']?>">

      <table class="table">

        <tr> 
          <td><b>Nome: </td>  
        	<td> <input class="form-control" type="text" placeholder="Informe o Nome Completo" name="nome" 
                value="<?=$paciente['NOME']?>" autofocus/><br/></td>
        </tr>
            
        <tr>  
          <td><b>Sexo: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe F ou M" name="sexo" value="<?=$paciente['SEXO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Data de Nascimento: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe AAAA-MM-DD" name="nascimento" value="<?=$paciente['DTNASC']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Número do CPF: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe os 11 dígitos do Cpf" name="cpf" required pattern="[0-9]+$" value="<?=$paciente['CPF']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Endereço: </td>  
            <td> <input class="form-control" type="text" placeholder="Informe o Logradouro, Número, Complemento, Localidade\UF, Cep" name="endereco" value="<?=$paciente['ENDERECO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Móvel: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe DDD+9+Número" name="telMovel" required pattern="[0-9]+$" value="<?=$paciente['TELMOVEL']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Fixo: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe DDD+3+Número" name="telFixo" required pattern="[0-9]+$" value="<?=$paciente['TELFIXO']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Telefone Comercial: </td>  
          <td> <input class="form-control" type="text" placeholder="Informe DDD+3+Número" name="telComercial" required pattern="[0-9]+$"value="<?=$paciente['TELCOMERCIAL']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>E-mail: </td>  
          <td> <input class="form-control" type="email" placeholder="Informe email@email.com.br" name="email" value="<?=$paciente['EMAIL']?>" /><br/>
          </td>
        </tr>

		<tr>
		  <td><input class="btn btn-primary" type="submit" value="Gravar"/>
              
          </td>
          <td> </td>  
		</tr>

      </table>
    </form>

<?php include("footer.php");?>