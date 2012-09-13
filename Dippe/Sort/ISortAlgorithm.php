<?php

namespace Dippe\Sort;

interface ISortAlgorithm{
	
	public function sort();					// start the sort algorithm
	public function setArray( $array );		// sets the array which will be sorted
	public function getArray();				// gets the sorted array
	public function getStepNum();			// gets the number of the steps

}


?>