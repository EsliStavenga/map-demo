<?php

namespace Exceptions;

use Exception;

class InvalidArgumentException extends Exception
{

	public function __construct($message = '', ...$vars)
	{
		$message = sprintf($message, ...$vars);

		parent::__construct($message, 0, null);
	}

}
