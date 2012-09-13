<?php

namespace Dippe\Sort;

abstract class ASortBase {

	private $sortArr	= array();
	private $stepNum	= 0;

	public function atest(){
		echo "atest";
	}

	public function setArray( $arr ){
		$this->sortArr	= $arr;
	}

	public function getStepNum(){
		return $this->stepNum;
	}

}

?>