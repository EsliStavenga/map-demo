<?php

spl_autoload_register(function ($class) {
	$file = sprintf('%s/classes/%s.php', __DIR__, str_replace('\\', DIRECTORY_SEPARATOR, $class));

	if (file_exists($file)) {
		require_once($file);
	}
});
