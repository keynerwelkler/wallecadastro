		<?php session_start(); ?>
		<html>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<head> 
		    <meta name="viewport" content="width=device-width" />
		    <title>Walle Cadastro - Consultas SPC, serasa e protesto</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="pt-br" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="keywords" content="consulta spc, serasa, conta imobiliaria, walle cadastro, pro web designer, scpc, tribunal de justiça, imovel, teledesbloqueio, credito concedido, walle, wale, cadastro, premier, wmpremier, consultas na hora" />
        <meta name="description" content="A Empresa Walle Serviços de Informações Cadastrais atua no mercado desde 2003 na área de analise cadastral. Estamos sempre procurando atualizar obtendo certificações e qualificação especializada para assim atender bem os nossos clientes." />
        <meta name="distribution" content="Global" />
        <meta name="geo.country" content="br" />
        <meta name="geo.placename" content="Brazil" />
        <meta name="geo.region" content="br" />
        <meta name="Category" content="web designer, web designer df, web designer brasilia, programador php, criar site df, criar site brasilia, agencia web designer" />
        <meta name="rating" content="General" />
        <meta name="copyright" content="" />
        <meta name="author" content="Agência Pró Web Designer - Criação de Sites" />
        <meta name="ROBOTS" content="index,follow,all" />
        <meta name="Googlebot" content="index,follow" />
        <meta name="MSNBot" content="index,follow,all" />
        <meta name="InktomiSlurp" content="index,follow,all" />
        <meta name="Unknownrobot" content="index,follow,all" />
        <meta name="revisit-after" content="1 days" />
        <meta name="audience" content="all" />
        <meta http-equiv="reply-to" content="" />
        <meta name="language" content="" />
        <meta name="doc-type" content="" />
        <meta name="expires" content="never" />


		    <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css' />
		    <link href="Content/reset.css" rel="stylesheet" />
		    <link href="Content/Walle.css" rel="stylesheet" />
		    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		    <meta name="viewport" content="width=device-width" />
		    <script src="bundles/modernizr43eb?v=qVODBytEBVVePTNtSFXgRX0NCEjh9U_Oj8ePaSiRcGg1"></script>

		</head>
		<?php 
		$p = @$_GET['p'];  
		$qtd = @$_GET['qtd'];
		$i = @$_GET['i'];

		if($qtd != ''){
			$_SESSION['quantidade'] = $qtd;
		}
	
		?>
	
		<!--?>-->
		<body>
		    <div id="area">
		        <div id="topo">
		            <div class="logo">
		                <a href="index.php">
		                    <img src="Content/site/walle.png" />
		                </a>
		            </div>
		            <div class="menu">
		                <ul>
		                    <li><a href="index.php">Inícial</a></li>
		                    <li><a href="Site/Empresa.php">Empresa</a></li>
		                    <li><a href="Site/Servicos.php">Serviços</a></li>
		                    <li><a href="Site/Contato.php">Contato</a></li>
		                    <li><a href="Site/Cadastro.php">Cadastro</a></li>
		                </ul>
		            </div>
		        </div>
		        <div id="section">
		            <div class="int">
		                <div class="banner">
		                   <!-- <img src="Content/site/index2.jpg" height="50%" width="100%"/> -->
							<!--<img src="Content/site/index1.jpg" /> -->
							<img src="banner.jpg" height="50%" width="100%"/> 
		                </div><hr><br>

		                <?php 
     	if($i == 'sucesso1'){ 
?>
	
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
alert ("Sua consulta foi realizada com sucesso, você será redirecionado para página de pagamento.");
</SCRIPT>
<meta http-equiv="refresh" content="1; url=pagamento.php">
<?php }

else {}
?>

<div id="fichas"><h1><font color="blue">Fichas de Cadastro pessoa fisica e juridica</font></h1> 
<h3> <font color="red">Escolha abaixo o formato de sua preferência </font> <!--<img src="seta-para-baixo.png" id="seta2">--></h3>


<div class="links">
<div id="word">
<h3> <img src="ico_word.png" width="40"></h3>
<a href="Files/cadastro-pessoafisica.doc"> <p><input class="download" type="button" value="Cadastro Pessoa Fisica"></p></a><br>
<a href="Files/cadastro-pessoajuridica.doc"><p><input class="download" type="button" value="Cadastro de Pessoa Jurídica"></p></a>
</div><!--
<div id="excel">
<h3><img src="ico_excel.png" width="40"></h3>
<a href="Files/CADASTRO-PESSOA-FISICA.xlsx"><p><input class="download" type="button" value="Cadastro de Pessoa Física"></p></a>
<a href="Files/CADASTRO-EMPRESA.xlsx"><p><input class="download" type="button" value="Cadastro de Pessoa Jurídica"></p></a>
</div>-->
<div id="pdf">
<h3><img src="ico_pdf.png" width="40"></h3>
<a href="Files/PESSOA-FISICA.pdf"><p><input class="download" type="button" value="Cadastro de Pessoa Física"></p></a> <br>
<a href="Files/EMPRESA-JUR.pdf"><p><input class="download" type="button" value="Cadastro de Pessoa Jurídica"></p></a>
</div></div>
</div> 
<br><br>
<br>



	<div id="conteudo2">
	<hr> <br>
	<h1><font color="blue">Emissão de nada consta por CPF ou CNPJ (na hora)</font></h1> 
		<h3> <font color="red">Escolha a consulta desejada abaixo:</font> <!--<img src="seta-para-baixo.png" id="seta1">--></h3>
		<!--<div id="botoes_consulta">

	
		
		<a href="?p=pf#consulta"><input type="button" class="botao" value="Consulta Pessoa Fisica"></a>
		<a href="?p=pj#consulta"><input type="button" class="botao" value="Consulta Pessoa Juridica"></a>

		</div>

	-->		

	<?php 
	// SE NÃO TIVER NADA SELECIONADO, ABRE A TELA DE QUANTIDADE
	if($p == '') { 
		?>

		<div class="form_consulta">

		
			<br><br><center>

			<?php switch($p){ 

				case '';?>

						<form method="POST" action="http://www.wallecadastro.com.br/cgi-sys/FormMail.cgi">
						<input type=hidden text name="subject" value="Consulta rapida recebida">
						<input type=hidden name="recipient" value="contato@wallecadastro.com.br">
						<input type=hidden name="redirect" value="http://www.wallecadastro.com.br/?i=sucesso1">
						<input type="text" name="Nome" placeholder="Nome completo" required="required">  
			                        <input type="text" name="Imobiliaria" placeholder="Imobiliária / Corretor" required="required">  
						<input type="text" name="Email" placeholder="Email" required="required"> 
						<input type="text" name="Telefone" placeholder="Telefone" required="required"> 
						
						<input type="text" placeholder="CPF / CNPJ" name="CPF" maxlength="11" pattern="[0-9]" required="required"> 
					
						<input type="submit" value="Consultar">
					</form> 


					<?php break; 
					} ?>
					<br><br><br>

					<a name="consulta"><b>Informe abaixo para multiplas consultas:</b></a><br><br>
		<table border="1">
				
		<tr>
		<td> 
			<form method="GET" action="#consulta"> 
		<select name="qtd">
			<?php
				$n = 0;


				while($n < 10){
					$n++;

			?>
		
			<option value="<?php echo $n; ?>"> <?php echo $n; }?> </option>
			</select>
	  <input type="hidden" value="1" name="p">
		<input type="submit" value="OK">
		</form> 
		</td>
		</tr></center>
		</table>
		</div>
<?php }else{ ?>
		<div class="form_consulta">
		<a name="consulta"><b>Preencha o formulário abaixo para continuar.</b></a>
			<br><br><center>
		<table border="1">
				
		<tr>
		<td> 

			<form method="POST" action="http://www.wallecadastro.com.br/cgi-sys/FormMail.cgi">
			<input type=hidden text name="subject" value="Consulta rapida recebida">
			<input type=hidden name="recipient" value="contato@wallecadastro.com.br">
			<input type=hidden name="redirect" value="http://www.wallecadastro.com.br/?i=sucesso1">
			<input type="text" name="Nome" placeholder="Nome completo" required="required">  
                        <input type="text" name="Imobiliaria" placeholder="Imobiliária / Corretor" required="required">  
			<input type="text" name="Email" placeholder="Email" required="required"> 
			<input type="text" name="Telefone" placeholder="Telefone" required="required"> 
			<?php 
				$i = 0;
				while($i < $qtd){
				$i++; 
			?>
			<input type="text" placeholder="CPF / CNPJ <?php echo $i; ?>" name="CPF" maxlength="11" pattern="[0-9]" required="required"> 
			<?php } ?>
			<input type="submit" value="Consultar">
		</form> 
		</td>
		</tr></center>
		</table>
		</div>
<?php } ?>
</div>

<br>


		                <div id="rodape">
		                    <!-- <div class="med">
		                        <img src="Content/site/spc.png" style="margin-right: 25px;" height="10%" width="35%"/>
		                        <img src="Content/site/serasa.gif" height="10%" width="50%"/> </div>-->
		                    <div style="text-align:center;">
		                        <p>
		                          <b>  SCS Quadra 06 ed. Carioca sala 504  <br/>
		(frente do patio brasil e ao lado correio)   <br />
		Telefone:(61) 3039-5504/ (61) 8438-4202 </b>
		                        </p>
		                    </div>
		              <!--  <div class="med">  
		                         <img src="Content/site/check.gif" class="rede" width="40%"/>
		                        <img src="Content/site/scpc.jpg" class="rede" height="5%" width="20%"/> 
		                       <a href="https://www.facebook.com/walle.servicoscadastrais?fref=ts" target="blank"> <img src="Content/site/facebook.png" class="rede" style="margin-top: 5px;" /> </a>
		                   </div>  -->
		                </div>
		            </div>
		        </div>
		    </div>
		    <script src="bundles/jqueryece3?v=JzhfglzUfmVF2qo-weTo-kvXJ9AJvIRBLmu11PgpbVY1"></script>

		    <script src="bundles/jqueryui278b?v=EHft7nwilnDMnejvwTyEKn_C5lwIsN1M3Xyb8c9OmSQ1"></script>

		    <script src="bundles/jqueryval00a8?v=mRjM0qa6T8GTCa8lhmXMI_-t5fsTCmHSxo4BqkY9x4A1"></script>

		    
		    <script src="Scripts/jquery-1.8.2.js"></script>
		    <script src="Scripts/jquery.cycle.all.js"></script>
		    <script type="text/javascript">
		    $(function() {
		        var galeria = $('.banner');
		        var contador =  galeria.length;
		        if (contador == 1) {
		            galeria.show();
		            galeria.cycle({
		                fx: 'fade',
		                timeout: 5000,
		                speed: 1000,
		                pager: '.numbers',
		                pause: true
		            });
		        }
		    });
		    </script>

		</body>


		</html>