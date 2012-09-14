<?php
/**
 * BubbleSort
 *
 * 1. Compare the neighbour items and swap them if they are in the wrong order.
 * 2. Repeat the first step on every item until the list will be ordered = no swaps are needed. 
 */

namespace Dippe\Sort\Algorithm;

use \Dippe\Debug\Debug as Debug;

class Bubble extends \Dippe\Sort\ASortBase implements \Dippe\Sort\ISortAlgorithm{

	public function __construct( $arrToSort ){
		Debug::log( 'Bubble __construct', 'initialized' );
		$this->arrToSort = $arrToSort;
	}

	public function sort(){
		Debug::log( 'Bubble sort', 'started '. json_encode($this->arrToSort) );
		$not_sorted	= true;
		$n		= sizeof($this->arrToSort);
		while ( $not_sorted ){
			$not_sorted	= false;
		// Debug::log( 'round ', $round );
			for( $i=0; $i<$n-1; $i++ ){
				if ( $this->arrToSort[$i]>$this->arrToSort[$i+1] ){
					$tmp	= $this->arrToSort[$i];
					$this->arrToSort[$i]	= $this->arrToSort[$i+1];
					$this->arrToSort[$i+1] 	= $tmp;
					$not_sorted	= true;
					$this->swapNum ++;
				}
				$this->stepNum ++;
			}
			$n--;
		}
		Debug::log( 'Sorted Arr : ', json_encode($this->arrToSort) );
		Debug::log( 'STEPNUM ', $this->stepNum );
		Debug::log( 'SWAPNUM ', $this->swapNum );
	}
}