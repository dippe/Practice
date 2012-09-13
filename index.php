<?php

ini_set('display_errors', '1');
error_reporting( E_ALL | E_STRICT );

function __autoload($class)
{
	$classPath	= str_replace( "\\", "/", $class) . ".php";
	// echo $classPath;
    require_once $classPath;
}


$a = new Dippe\Sort\Algorithm\Selection();


?>