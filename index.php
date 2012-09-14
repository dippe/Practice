<?php

ini_set('display_errors', '1');
error_reporting( E_ALL | E_STRICT );

function __autoload($class)
{
	$classPath	= str_replace( "\\", "/", $class) . ".php";
	// echo $classPath;
    require_once $classPath;
}


$arrToSort	= array(
	1,5,3,8,2,5,7,9,21,3,5,26,78
	);


$sort1 = new Dippe\Sort\Algorithm\Selection($arrToSort);
$sort1->sort();


use Dippe\Debug\Debug as Debug;
$fasz = new Debug();
echo ".......";
echo Debug::getHtmlLog();
echo Debug::getJsConsoleLog();

?>