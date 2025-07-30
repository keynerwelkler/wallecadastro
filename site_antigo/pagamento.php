		<?php session_start(); ?>
		<html>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<head> 
		    <meta name="viewport" content="width=device-width" />
		    <title>Walle Cadastro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="pt-br" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="keywords" content="consulta spc, serasa, conta imobiliaria, walle cadastro, pro web designer, scpc, tribunal de justiça, imovel, teledesbloqueio, credito concedido" />
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
		$valor = 20.00 * $_SESSION['quantidade'] .',00';
		?>


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
		               <!-- <div class="banner">
		                    <img src="Content/site/index1.jpg" />
							<img src="Content/site/index1.jpg" /> 
		                </div> --><hr><br>

		                <?php 
     	if($i == 'sucesso1'){ 
?>
	
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
alert ("Sua consulta foi realizada com sucesso, confira no seu email as instruções para o pagamento.");
</SCRIPT>
<meta http-equiv="refresh" content="1; url=http://www.wallecadastro.com.br">
<?php }

else {}
?>
<h1><center>Selecione uma forma de pagamento abaixo para prosseguir:<br><br> <font color="red"><?php echo $_SESSION['quantidade']; ?> consultas / Valor R$ <?php echo $valor; ?></font></center></h1>
<hr>
<div id="fichas"><center><h2><b>Deposito em conta  / Transferência Bancária</b></center></h2>
<h3> Segue abaixo os dados bancários: </h3>


<p>
<br>Nome: Walle Cadastro
<br>Agência:1003-0
<br>Conta: 24.485-6
<br>Banco: Banco do Brasil
<br>Consultas: <?php echo $_SESSION['quantidade']; ?>
<br>Valor: R$ <?php echo $valor; ?>
</p>
<br>

<b> Observação: </b> Após o depósito se possivel envie o comprovante para o email <a href="malito:contato@wallecadastro.com.br">contato@wallecadastro.com.br </a> para agilizar o serviço<br>
<br>



	<div id="conteudo2">
	<hr> <br>
	<h2><center><b>Boleto Bancário / Cartão de Crédito</b></center></h2> 
		<h3> Clique no botão abaixo para continuar </h3>
		<!--<div id="botoes_consulta">

	
		
		<a href="?p=pf#consulta"><input type="button" class="botao" value="Consulta Pessoa Fisica"></a>
		<a href="?p=pj#consulta"><input type="button" class="botao" value="Consulta Pessoa Juridica"></a>

		</div>

	-->		

<?php if($_SESSION['quantidade'] == 1){ ?>
	<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<center>
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="8E8937AEBFBF39C664F8BFBB3C5321B8" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 2){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="99C60B9B91915CB88436DF8894D51533" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 3){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="9980888580809ED334877F922D8FD9F1" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 4){  ?>

<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="2AF12C3EA6A60BC114BDCF82ADDCEDB4" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 5){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="A36AB2101A1AC73334DF3FB09ABF00BF" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 6){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="42A5B618B2B2EB2BB4046F8B6D618373" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 7){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="F9089C9BBEBE211FF4A6DFAF2A3A71D6" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

<?php }elseif($_SESSION['quantidade'] == 8){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="8F9017CC969653BDD4800FBC2C46178B" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 9){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="29383000464649CDD47D9FB36CCB4B7E" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<?php }elseif($_SESSION['quantidade'] == 10){  ?>
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="A0C9A44AC7C7C11DD45DEFA1FF585924" />
<input type="image" src="pagamento.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
</center>
<?php } ?>
</div>

<br>


		                <div id="rodape">
		                    <div class="med">
		                        <img src="Content/site/spc.png" style="margin-right: 25px;" />
		                        <img src="Content/site/cdl.png" /></div>
		                    <div class="med t-center">
		                        <p>
		                            SCS Qd 02 Bloco C22 SALA 614<br/>
		Asa Sul, Brasília - DF   <br />
		Telefone:(61) 3039-5504/  8438-4202
		                        </p>
		                    </div>
		                    <div class="med">
		                        <img src="Content/site/blogger.png" class="rede" />
		                        <img src="Content/site/twitter.png" class="rede" />
		                       <a href="https://www.facebook.com/walle.servicoscadastrais?fref=ts" target="blank"> <img src="Content/site/facebook.png" class="rede" style="margin-top: 5px;" /> </a>
		                    </div>
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
