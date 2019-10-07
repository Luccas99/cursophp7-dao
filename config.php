<?php

spl_autoload_register(function($class_name) {

	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if (file_exits(($filename))) {
		require_once($filename);

	}

});

?>
