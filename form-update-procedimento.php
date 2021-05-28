<?php include("heard-procedimento.php");?>
<?php include("connection.php");?>
<?php include("crud-procedimento.php");


    $id = $_GET['id'];
    $procedimento = selectUpdateProcedimento($conexao, $id);

?>

  <h1><b>Formulário de Edição de Cadastro de Procedimento</h1><b><br><br>
    
    <form action="update-procedimento.php" method="post">

      <input type="hidden" name="id" value="<?=$procedimento['ID']?>">

      <table class="table">

        <tr> 
          <td><b>Código da Categoria: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: C0123" name="codcategoria" value="<?=$procedimento['CODCATEGORIA']?>" autofocus/><br/></td>
        </tr>
          
        <tr>  
          <td><b>Nome da Categoria: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: EXAME CLÍNICO" name="nomecategoria" value="<?=$procedimento['NOMECATEGORIA']?>" /><br/></td>
        </tr>

        <tr>  
          <td><b>Código do Serviço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: 2010" name="codservico" value="<?=$procedimento['CODSERVICO']?>"required pattern="[0-9]+$" /><br/></td>
        </tr>

        <tr>  
          <td><b>Nome do Seriço: </td>  
          <td> <input class="form-control" type="text" placeholder="EX.: CONSULTA INICIAL" name="nomeservico" value="<?=$procedimento['NOMESERVICO']?>"/><br/></td>
        </tr>

        <tr>  
          <td><b>Valor (R$): </td>  
            <td> <input class="form-control" type="text" placeholder="EX.: 150.99" name="valor" value="<?=$procedimento['VALOR']?>"/><br/></td>
        </tr>

		<tr>
		  <td><input class="btn btn-primary" type="submit" value="Gravar"/>
              
          </td>
          <td> </td>  
		</tr>

      </table>
    </form>

<?php include("footer.php");?>