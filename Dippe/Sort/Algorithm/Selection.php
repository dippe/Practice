<?php
/**
 * Selection Algorithm
 *
 * Steps:
 * 1. Find the minimum value
 * 2. Swap it with the value in the first position
 * 3. Repeat the steps above for the remainder of the list (the ordered items will be skipped)
 * 
 */

namespace Dippe\Sort\Algorithm;

use Dippe\Debug\Debug as Debug;


class Selection extends \Dippe\Sort\ASortBase implements \Dippe\Sort\ISortAlgorithm{

	public function __construct( array $arrToSort ){
		Debug::log( "Selection __constructor", "initialized" );
		$this->arrToSort	= $arrToSort;
	}

	public function sort(){
		Debug::log( "Selection sort", "started" );

		for ($i=0;$i<(sizeof($this->arrToSort)-1);$i++){
			$minRef	= $this->arrToSort[$i];
			for ($j=($i+1);$j<sizeof($this->arrToSort);$j++){
				if ( $this->arrToSort[$j] < $this->arrToSort[$minRef] ){
					$minRef = $j;
				}
			}
			// if smaller value founded, then swap
			if ( $this->arrToSort[$i] > $this->arrToSort[$minRef] ){
				$tmp						= $this->arrToSort[$minRef];
				$this->arrToSort[$minRef]	= $this->arrToSort[$i];
				$this->arrToSort[$i]		= $tmp;
			}
			$this->stepNum++;
			Debug::log( 'STEP '.$this->stepNum.' : ', json_encode($this->arrToSort) );
		}
	}

}

?>