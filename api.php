<?php

use Services\DataService;
use Exceptions\InvalidArgumentException;

try {
	$data = DataService::generatePOIs(mt_rand(1, 20));
} catch(InvalidArgumentException $e) {
	header("HTTP/1.1 500 Internal Server Error");
	$data = ['error' => $e->getMessage()];
} finally {
	header("Content-type:application/json");
	echo json_encode($data);
}
