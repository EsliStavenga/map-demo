<?php

namespace HTTP;

use HTTP\Enum\Method;

class Request
{

	/**
	 * @var mixed
	 */
	private string $requestMethod;

	/**
	 * Request constructor.
	 */
	public function __construct()
	{
		$this->requestMethod = $_SERVER['REQUEST_METHOD'];
		//Room to assign Request::query, Request::body, etc
	}

	public function handle(): void
	{
		switch($this->requestMethod) {
			case Method::POST:
				require_once('api.php');
				break;

			case Method::GET:
			default:
				require_once('map.php');
				break;
		}
	}

}
