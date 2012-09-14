<?php

namespace Dippe\Sort;

abstract class ASortBase {

	private $stepNum	= 0;
	private $swapNum	= 0;
	private $arrToSort	= array();

	public function setArray( $arr ){
		$this->arrToSort	= $arr;
	}

	public function getArray(){
		return $this->arrToSort;
	}

	public function getStepNum(){
		return $this->stepNum;
	}

}

?>