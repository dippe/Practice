<?php
/**
 * BubbleSort
 *
 * 1. Compare the neighbour items and swap them if they are in the wrong order.
 * 2. Repeat the first step on every item until the list will be ordered = no swaps are needed. 
 */

namespace Dippe\Sort\Algorithm;

use Dippe\Sort\;
use Dippe\Debug\;

class Bubble extends ASortBase implements ISortAlgorithm{

	public function __construct( $arrToSort ){
		Debug::log( 'Bubble __construct', 'initialized' );
		$this->arrToSort = $arrToSort;
	}

	public function sort(){

	}
}