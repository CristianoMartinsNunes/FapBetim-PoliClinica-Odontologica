<?php
	    
	// SGBD MySQl - BD FapErpPoliClinica
	include("connection.php");

	// Form index.html
	$pUsuario   = $_POST["usuario"];
	$pSenha     = $_POST["senha"];
	
	// Sentença SQL 
	$sql = mysqli_query($conexao,"SELECT * 
		                            FROM PESSOA
			                       WHERE EMAIL = '$pUsuario' 
		                             AND SENHA = '$pSenha'");
    // Rows SQL  		
	$sqlRows = mysqli_num_rows($sql);


	// Access Site
	if ($sqlRows == '')
	{
		/* header('location:http://google.com.br/'); */

		echo "	<html>
		<head>
  				<title>PoliClínica FAP Betim\MG By CMN®</title>
  				<meta charset='utf-8'>
 				 <link rel = 'shortcut icon' href = 'image/logo.ico'>


  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' 
  integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>

  <link rel='stylesheet' type='text/css' href='css/global.css'>



		</head>
		<body>
				
				<br><br><br> 
				<center>
				<img src='image/a.png'>
				</center>
				<br> 
    		    <hr>

    			<center>
    			<h1> O Usuário e/ou Senha estão incorretos!!! </h1>
    			</center>
       			<center><h1> Usuário: $pUsuario <br> Senha: $pSenha</h1></center>  

    			 <hr>
    			 <br>
    			 <a href='http://policlinica.martinsnunes.com.br/index.html'>
				 <center><button type='submit' class='btn btn-danger btn-lg'>Fechar</button></center>
				 </a>
				 <br>
		</body>
	</html>";

	}
	else
	{
		header('location:desktop.php');
	}



?>