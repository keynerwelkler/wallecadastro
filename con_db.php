<?php
date_default_timezone_set('America/Sao_Paulo');


$servidor = $_SERVER['SERVER_NAME'];

if($servidor == 'localhost' or $ip == '192.168.0.194' or $ip == '192.168.0.167') {

		$server = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'walle';
		$hora = date('h');

		}else {
		$server = 'localhost';
		$user = 'walle_admin';
		$pass = 'airton030201';
		$db = 'walle_walle'; 
}




$conexao = @mysql_connect($server, $user, $pass) or die (mysql_error());

mysql_select_db($db);

// CONSULTA CLIENTES

$consulta_clientes = "SELECT * FROM clientes";
	$consultar_clientes = mysql_query($consulta_clientes) or die (mysql_error());

$clientes = mysql_fetch_array($consultar_clientes);



// ATUALIZAR CLIENTES

if($hora == '08'){

	$soma_clientes = $clientes['CLIENTES'] + 47;

$atualiza_cadastros = "UPDATE clientes SET clientes = '$soma_clientes'";
	$atualizar_cadastros = mysql_query($atualiza_cadastros) or die (mysql_error());

}


// CONSULTA VISITAS 


$visitantes = "SELECT * FROM visitas";
	$ver_visitantes = mysql_query($visitantes) or die (mysql_error());

		$ver_visitas = mysql_fetch_array($ver_visitantes);

// ADICIONAR VISITANTE

$add_visita = $ver_visitas['VISITAS'] + 2;

$atualiza_visitas = "UPDATE visitas SET visitas = '$add_visita'";
	$atualizar_visitas = mysql_query($atualiza_visitas) or die (mysql_error());



?>