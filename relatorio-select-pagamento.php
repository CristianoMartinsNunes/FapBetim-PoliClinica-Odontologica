<?php 
  
    include("heard-relatorio-sistema.php");
    include("connection.php");
    include("crud-relatorio.php");

echo '<center><h1>Relatório 04 - Listar Pagamento de Serviço p/período<h1></center>
<hr>';



    

    echo "<center><h2>[ Data Inicial ]: ".$data1 = $_POST["data1"].' '."[ Data Final ]: ".$data2 = $_POST["data2"]."</center></h2>";



    echo '<table class="table table-striped table-bordered">
    <tr>
      <th> Nº </th>    
      <th> Código da Parcela </th>
      <th> Serviço </th>
      <th> Valor (R$) </th>
      <th> Data Pagamento </th>
      <th> Valor Pago (R$) </th>
    </tr>';

    $soma = 0;
    $contador = 1;

     $pacientes = selectPagamentos($conexao,$data1,$data2);
     foreach ($pacientes as $paciente):
 


        echo '<tr>';
        echo '<td>'.$contador.'</td>';
        echo '<td>'.$paciente['ID'].'</td>';
        echo '<td>'.$paciente['HISTORICO'].'</td>';
        echo '<td style="text-align: right;">'.$paciente['VALORPARCELA'].'</td>';
        echo '<td>'.$paciente['DTPAGAMENTO'].'</td>';
        echo '<td style="text-align: right;">'.$paciente['VALORPAGO'].'</td>';         
        echo '</tr>';      

        $soma = ($paciente['VALORPAGO'] + $soma);
        $contador++;
  
          endforeach;

echo '</table>';

    echo '<table class="table table-striped table-bordered">
    <tr>
      <th style="text-align: right;" > Valor Total R$: '.$soma.'</th>
    </tr>';

echo '</table>';

    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i');
    echo "<center><h3>Data/Hora Emissão: ".$date.'</h3></center>';



?>

<?php include("footer.php");?>
