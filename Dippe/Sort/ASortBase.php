<?php

namespace Dippe\Sort;

abstract class ASortBase {

	private $sortArr	= array();
	private $stepNum	= 0;

	public function setArray( $arr ){
		$this->sortArr	= $arr;
	}

	public function getArray(){
		return $this->sortArr;
	}

	public function getStepNum(){
		return $this->stepNum;
	}

}

?>