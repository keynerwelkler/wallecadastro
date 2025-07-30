<?php
$p = @$_GET['p'];

switch($p){

	default;
	require_once 'index.php';
	break;

	case 'empresa';
	require_once 'Empresa.php';
	break;

}



?>