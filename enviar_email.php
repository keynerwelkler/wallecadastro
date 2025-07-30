

<?php

$op = @$_POST['op'];

//Dados do imovel
$imovel_pretendido = @$_POST['imovel_pretendido'];
$valor_aluguel  = @$_POST['valor_aluguel'];
$imobiliaria = @$_POST['imobiliaria'];
$tipo_imovel  = @$_POST['tipo_imovel'];
$tipo_locatario = @$_POST['Tipo_locatario'];
$cidade_imovel = @$_POST['cidade'];
$estado_imovel = @$_POST['estado'];

//Dados pessoais
$nome_completo = @$_POST['nome'];
$endereco = @$_POST['endereco'];
$cidade = @$_POST['uf'];
$telefone_residencial = @$_POST['telefone_residencial'];
$telefone_celular = @$_POST['telefone_celular'];
$data_nascimento = @$_POST['data_nascimento'];
$tempo_df = @$_POST['tempo_df'];
$estado_civil = @$_POST['estado_civil'];
$cpf = @$_POST['cpf'];
$rg = @$_POST['rg'];
$tipo_imovel_atual  = @$_POST['tipo_imovel_atual'];
$valor_aluguel = @$_POST['valor_aluguel'];
$nome_locador = @$_POST['nome_locador'];
$telefone_locador = @$_POST['telefone_locador'];

//Atividades e rendimentos
$empresa = @$_POST['empresa'];
$telefone_empresa = @$_POST['telefone_empresa'];
$cargo_empresa = @$_POST['cargo'];
$periodo = @$_POST['periodo'];
$regime = @$_POST['regime'];
$endereco_empresa = @$_POST['endereco_empresa'];
$renda_mensal = @$_POST['renda_mensal'];
$outros_rendimentos = @$_POST['outros_rendimentos'];
$origem_renda = @$_POST['origem'];

// Conjuge

$nome_conjuge = @$_POST['nome_conjuge'];
$cpf_conjuge = @$_POST['cpf_conjuge'];
$rg_conjuge = @$_POST['rg_conjuge'];
$data_nascimento_conjuge = @$_POST['data_nascimento_conjuge'];
$empresa_conjuge = @$_POST['empresa_conjuge'];
$rendimento_conjuge = @$_POST['renda_conjuge'];

// Bens imoveis

$endereco_bem_imovel = @$_POST['endereco_bem_imovel'];
$cidade_bem_imovel  = @$_POST['cidade_bem_imovel'];
$valor_bem_imovel = @$_POST['valor_bem_imovel'];
$financiado_bem_imovel = @$_POST['financiado_bem_imovel'];
$valor_financiamento_bem_imovel = @$_POST['valor_prestacao_bem_imovel'];

// Bens Moveis

$financiado_bem_movel = @$_POST['financiado_bem_movel'];
$valor_financiamento_bem_movel = @$_POST['valor_bem_movel'];
$ano_bem_movel = @$_POST['ano_bem_movel'];

// Referencias Bancaria

$banco_referencia1 = @$_POST['banco_referencia1'];
$agencia_referencia1 = @$_POST['agencia_referencia1'];

$banco_referencia2 = @$_POST['banco_referencia2'];
$agencia_referencia2 = @$_POST['agencia_referencia2'];

//Referencias Pessoais 

$nome_referencia1 = @$_POST['nome_referencia1'];
$telefone_referencia1 = @$_POST['telefone_referencia1'];

$nome_referencia2 = @$_POST['nome_referencia2'];
$telefone_referencia2 = @$_POST['telefone_referencia2'];


$comprovante_residencia = @$_FILES['comprovante_residencia']['name'];
$certidao_nascimento = @$_FILES['certidao_nascimento']['name'];
$comprovante_renda = @$_FILES['comprovante_renda']['name'];
$aposentado = @$_FILES['aposentado']['name'];
$funcionario_clt = @$_FILES['funcionario_clt']['name'];
$empresario = @$_FILES['empresario']['name'];
$escritura = @$_FILES['escritura']['name'];



mkdir('./arquivos/'.$cpf.'/'); // Cria uma nova pasta dentro do diretório atual


$diretorio = './arquivos/'.$cpf.'';


if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['comprovante_residencia']) ? $_FILES['comprovante_residencia'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else

/*
if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['comprovante_residencia'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['comprovante_residencia']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['comprovante_residencia']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
		
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	
		
		}
		
	}

}
*/



if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['certidao_nascimento']) ? $_FILES['certidao_nascimento'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else


/*
if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['certidao_nascimento'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['certidao_nascimento']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['certidao_nascimento']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
	
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	

		}
		
	}

}

*/


if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['comprovante_renda']) ? $_FILES['comprovante_renda'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else


/*

if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['comprovante_renda'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['comprovante_renda']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['comprovante_renda']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
	
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	
	
		}
		
	}

}

*/



if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['aposentado']) ? $_FILES['aposentado'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else

/*
if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['aposentado'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['aposentado']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['aposentado']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
	
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	
	
		}
		
	}

}

*/



if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['funcionario_clt']) ? $_FILES['funcionario_clt'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else

/*


if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['funcionario_clt'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['funcionario_clt']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['funcionario_clt']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
		
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	
	
		}
		
	}

}

*/



if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['empresario']) ? $_FILES['empresario'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else

/*


if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['empresario'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['empresario']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['empresario']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
		
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	

		}
		
	}

}

*/



if (!is_dir($diretorio)){ 
	//echo "Pasta $diretorio nao existe";
} 


else { //echo "A Pasta Existe<br>";


			$arquivo = isset($_FILES['escritura']) ? $_FILES['escritura'] : FALSE;

				for ($k = 0; $k < count($arquivo['name']); $k++)
					{
					   $destino = $diretorio."/".$arquivo['name'][$k];

					    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
					    	//echo "MOVEUUUUUU<br>"; 
					    }

					    else {
					    //echo "NAOOOO MOVEU";
					    }
					}		



} // fecha else


/*


if( $_FILES ) { // Verificando se existe o envio de arquivos.
	
	if( $_FILES['escritura'] ) { // Verifica se o campo não está vazio.
		
		$dir = './arquivos/'; // Diretório que vai receber o arquivo.
		$tmpName = $_FILES['escritura']['tmp_name']; // Recebe o arquivo temporário.
		$name = $_FILES['escritura']['name']; // Recebe o nome do arquivo.
		
		// move_uploaded_file( $arqTemporário, $nomeDoArquivo )
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { // move_uploaded_file irá realizar o envio do arquivo.		
			header('ok'); // Em caso de sucesso, retorna para a página de sucesso.	
			
		} else {			
			header('falha'); // Em caso de erro, retorna para a página de erro.	
			
		}
		
	}

}

*/



if($op == 'enviar_email'){
Ini_set ('display_errors', 1);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		Error_reporting (E_ALL);
		 
		$from = "contato@wallecadastro.com.br";
		 
		$to =  "contato@wallecadastro.com.br";
		 
		$subject = utf8_decode('Novo cadastro Walle Servicos');
		 
		$message = utf8_decode('Um novo cadastrado foi realizado no site da Walle serviços: 

						<br>Imovel pretendido:'.$imovel_pretendido.'
						<br>Valor aluguel:'.$valor_aluguel.'
						<br>Imobiliaria'.$imobiliaria.'
						<br>Tipo imovel:'.$tipo_imovel.' 
						<br>Tipo locatário:'.$tipo_locatario.'
						<br>Cidade imovel:'.$cidade_imovel.'
						<br>Estado imovel:'.$estado_imovel.'


						<br><br>Nome completo:'.$nome_completo.'
						<br>Endereço:'.$endereco.'
						<br>Cidade:'.$cidade.'
						<br>Telefone residencial:'.$telefone_residencial.'
						<br>Telefone celular'.$telefone_celular.'
						<br>Data de nascimento'.$data_nascimento.'
						<br>Tempo no DF:'.$tempo_df.'
						<br>Estado civil:'.$estado_civil.'
						<br>CPF:'.$cpf.'
						<br>RG:'.$rg.'
						<br>Tipo imovel atual:'.$tipo_imovel_atual .'
						<br>Valor aluguel:'.$valor_aluguel.'
						<br>Nome locador:'.$nome_locador.'
						<br>Telefone locador:'.$telefone_locador.'


						<br><br>Empresa:'.$empresa.'
						<br>Telefone empresa:'.$telefone_empresa.'
						<br>Cargo:'.$cargo_empresa.'
						<br>Periodo:'.$periodo.'
						<br><br>Regime:'.$regime.'
						Endereço empresa:'.$endereco_empresa.'
						<br>Renda atual:'.$renda_mensal.'
						<br>Outros rendimentos:'.$outros_rendimentos.'
						<br>Origem:'.$origem_renda.'



						<br><br>Nome conjuge:'.$nome_conjuge.'
						<br>CPF Conjuge:'.$cpf_conjuge.'
						<br>RG Conjuge:'.$rg_conjuge.'
						<br>Data de nascimento Conjuge:'.$data_nascimento_conjuge.'
						<br>Empresa conjuge:'.$empresa_conjuge.'
						<br>Rendimentos conjuge:'.$rendimento_conjuge.'



						<br><br>Endereço bem imovel:'.$endereco_bem_imovel.'
						<br>Cidade bem imovel:'.$cidade_bem_imovel.'
						<br>Valor bem imovel:'.$valor_bem_imovel.'
						<br>Financiado:'.$financiado_bem_imovel.'
						<br>Valor financiamento:'.$valor_financiamento_bem_imovel.'


						<br><br>Financiado:'.$financiado_bem_movel.'
						<br>Valor financiamento:'.$valor_financiamento_bem_movel.'
						<br>Ano / modelo'.$ano_bem_movel.'



						<br><br>Referencia Bancaria:'.$banco_referencia1.'
						<br>Referencia Bancaria:'.$agencia_referencia1.'

						<br>Referencia Bancaria:'.$banco_referencia2.'
						<br>Referencia Bancaria:'.$agencia_referencia2.'



						<br><br>Referencia pessoal:'.$nome_referencia1.'
						<br>Referencia pessoal:'.$telefone_referencia1.'

						<br>Referencia pessoal:'.$nome_referencia2.'
						<br>Referencia pessoal:'.$telefone_referencia2.'


						<br><br>Arquivos: https://wallecadastro.com.br/arquivos/'.$cpf.'

						<br><br> <b> Copie e cole o link acima no navegador para visualizar os arquivos</b>



			');
	
    $headers .= "From:  wallecadastro.com.br<contato@wallecadastro.com.br>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
    $headers .= "X-Sender:  <contato@wallecadastro.com.br>\n"; //email do servidor //que enviou
    $headers .= "X-Mailer: PHP  v".phpversion()."\n";
    $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
    $headers .= "Return-Path:  <contato@wallecadastro.com.br>\n"; //caso a msg //seja respondida vai para  este email.
    $headers .= "MIME-Version: 1.0\n";
		$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
		 
		Mail ($to, $subject, $message, $headers);
		 
		echo '<script> alert("Seu cadastro foi realizado com sucesso, para continuar basta prosseguir com a confirmação de pagamento. \n ")</script>';


	
	echo '<meta http-equiv="refresh" content=1;url="./pagamento.php">';

}


?>
