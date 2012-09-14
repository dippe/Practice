<?php
/**
 * Quick sort algorithm
 */

namespace Dippe\Sort\Algorithm;

use \Dippe\Debug\Debug;

class Quick{

	public function __construct( $arrToSort, $mode='recInPlace' ){
		Debug::log( 'QUICK __construct', 'initialized');
		$this->arrToSort = $arrToSort;
	}
	
	public function sort(){
		Debug::log( 'Quick sort', 'started' );

		switch( $mode ){
			case 'recNew';
				break;
			case 'recInPlace' : 
			default:
				$this->recInPlace( $this->arrToSort, 0, (sizeof($this->arrToSort)-1) );
				break;
		}
		
		Debug::log( 'Sorted Arr : ', json_encode($this->arrToSort) );
		Debug::log( 'STEPNUM ', $this->stepNum );
		Debug::log( 'SWAPNUM ', $this->swapNum );
	}

	private function recInPlace( &$arr, $lo, $hi){
		
		$pivot = $arr[$lo + ($hi-$lo)/2];
		// Debug::log( 'recInPlace pivot:', $pivot );

		$i	= $lo;
		$j	= $hi;

		while( $i<=$j ){
			while( $pivot > $arr[$i] ){
				$i++;
				$this->stepNum++;
			}

			while( $pivot < $arr[$j] ){
				$j--;
				$this->stepNum++;
			}

			// swap
			if ( $i <= $j ){
				$tmp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $tmp;
				// this prevents infinite cycles:
				$i++;
				$j--;
				$this->swapNum++;
			}
		}

		// Debug::log( 'recInPlace result:', json_encode($arr) );

		if ( $lo < $j ) {
			$this->recInPlace( $arr, $lo, $j);
		}
		if ( $hi > $i ){
			 $this->recInPlace( $arr, $i, $hi);
		}

	}



}

?>