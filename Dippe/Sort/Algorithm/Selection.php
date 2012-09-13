<?php

namespace Dippe\Sort\Algorithm;

use Dippe\Debug\Debug as Debug;


class Selection extends \Dippe\Sort\ASortBase implements \Dippe\Sort\ISortAlgorithm{

	private $arrToSort	= array();

	public function __construct( array $arrToSort ){
		Debug::log( "Selection __constructor", "initialized" );
		$this->arrToSort	= $arrToSort;
	}

	public function sort(){
		Debug::log( "Selection sort", "started" );

	}

}

?>