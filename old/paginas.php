<?php

switch ($pg) {
	case 'inicio':
		require_once 'inicio.php';
		break;

	case 'empresa':
		require_once 'empresa.php';
		break;

	case 'servicos':
		require_once 'servicos.php';
		break;

	case 'contato':
		require_once 'contato.php';
		break;
	
	default:
		require_once 'inicio.php';
		break;
}