	<?php

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	define('APP',ROOT.'application'.DS);
	define('VIEWS_PATH',ROOT.'application'.DS.'views'.DS);
	define('APP_W',basename($_SERVER['SCRIPT_NAME']));