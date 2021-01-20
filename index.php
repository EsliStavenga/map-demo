<?php

require_once('src/autoload.php');

switch($_SERVER['REQUEST_METHOD']) {
	case 'POST':
		require_once('api.php');
		break;

	case 'GET':
	default:
		require_once('map.php');
		break;

}
