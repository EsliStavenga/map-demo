<?php

use Services\DataService;
use Exceptions\InvalidArgumentException;

try {
	$data = DataService::generatePOIs();
} catch(InvalidArgumentException $e) {
	$data = ['error' => $e->getMessage()];
} finally {
	echo json_encode($data);
}
