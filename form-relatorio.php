<?php include("heard.php");?>

  <h1><b>Lista de Relatório(s) do Sistema</h1><b><br><br>
    

      <table class="table table-striped table-bordered">
      
      <tr>
        <th> Código </th>
        <th> Título </th>
        <th> Função 01</th>
        
      </tr>

        <tr> 
          <td>
            1
          </td> 
          <td>
            Listar um Paciente 
          </td> 
          <td><a class = "btn btn-primary" href="form-relatorio-select-paciente.php">Vizualizar</a></td>
        </tr>

        <tr> 
          <td>
            1.01
          </td> 
          <td>
            Listar todos Pacientes 
          </td> 
          <td><a class = "btn btn-primary" href="relatorio-select-pacientes.php">Vizualizar</a></td>
        </tr>


        <tr> 
          <td>3          
          </td> 
          <td>
            Listar Ordem de Serviço p/paciente 
          </td> 
          <td><a class = "btn btn-primary" href="TESTE.php">Vizualizar</a></td>
        </tr>

        <tr> 
          <td>3.01          
          </td> 
          <td>
            Listar Ordem de Serviço p/paciente 
          </td> 
          <td><a class = "btn btn-primary" href="recibo.php">Vizualizar</a></td>
        </tr>

        <tr> 
          <td>4          
          </td> 
          <td>
            Listar Pagamento de Serviço p/período 
          </td> 
          <td><a class = "btn btn-primary" href="form-relatorio-select-pagamento.php">Vizualizar</a></td>
        </tr>

      </table>


<?php include("footer.php");?>