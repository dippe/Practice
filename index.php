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
	21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4,21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4,21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4, 21,3,5,26,78, 1,5,3,8,2,5,7,9,233, 2,0,13,7,93, 12, 44,22,-22,1000,4
	);


/*$arrToSort	= array(
	1,2,4,5,76,7,8,9,11,2,33,34,35,36,37,38,39
	);
*/

$oSort1 = new Dippe\Sort\Algorithm\Selection($arrToSort);
$oSort1->sort();

$oSort2 = new Dippe\Sort\Algorithm\Bubble($arrToSort);
$oSort2->sort();

$oSort3	= new Dippe\Sort\Algorithm\Quick($arrToSort);
$oSort3->sort();

use Dippe\Debug\Debug as Debug;


echo ".......";
echo Debug::getHtmlLog();
echo Debug::getJsConsoleLog();

?>