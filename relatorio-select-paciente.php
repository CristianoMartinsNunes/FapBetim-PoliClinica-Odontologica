<?php include("heard-relatorio-sistema.php");?>
<?php include("connection.php");?>
<?php include("crud-relatorio.php");?>

<center><h3>Relatório Nº: 1 - Listar um Paciente<h3></center>
<hr>



    <?php
     $cpf  = $_POST["cpf"];
     $pacientes = selectPaciente($conexao,$cpf);
     foreach ($pacientes as $paciente):
    ?>


          Código:................................. <?=$paciente['ID']?><br>          
          Nº CPF:................................. <?=$paciente['CPF']?><br>
          Nome:................................... <?=$paciente['NOME']?><br>        
          Sexo:..................................... <?=$paciente['SEXO']?><br>
          Nascimento:....................... <?= $paciente['DTNASC']?><br>
          Endereço:............................ <?=$paciente['ENDERECO']?><br>
          Telefone Móvel:................. <?=$paciente['TELMOVEL']?><br>
          Telefone Fixo:..................... <?= $paciente['TELFIXO']?><br>
          Telefone Comercial:.......... <?=$paciente['TELCOMERCIAL']?><br>
          E-mail:.................................. <?=$paciente['EMAIL']?><br>
          Data/Hora Cadastro:........ <?= $paciente['DTCAD'] ?><br><br>

     <?php
          endforeach
     ?>
<hr> 
<?php include("footer.php");?>
