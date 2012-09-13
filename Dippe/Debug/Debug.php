<?php

namespace Dippe\Debug;

class Debug{

	private static $logArr	= array();

	/**
	 * Add log item
	 * @param  [type] $label [description]
	 * @param  [type] $str   [description]
	 * @return [type]        [description]
	 */
	public static function log( $label, $text ){
		$tmpItem	= new DebugLogItem( $label, $text );
		array_push( self::$logArr, $tmpItem );
	}


	/**
	 * Get the logs in HTML format
	 * @return String Formatted logs
	 */
	public static function getHtmlLog(){
		$tmpStr	= '';
		foreach( self::$logArr as $item ){
			$tmpStr .= '<b>'.$item->label.' : </b>'.$item->text;
		}
		return $tmpStr;
	}


	/**
	 * returns an embeddable javascript code, which shows the logs in the browser console
	 * @return String Html script tag with js code
	 */
	public static function getJsConsoleLog(){
		$tmpStr	= '<script>';
		foreach( self::$logArr as $item ){
			$tmpStr .= 'console.log("'.$item->label.' : '.$item->text.'");';
		}
		$tmpStr	.= '</script>';
		return $tmpStr;
	}

}


class DebugLogItem{

	public function __construct( $label, $text ){
		$this->label	= $label;
		$this->text		= $text;
	}

	public $label;
	public $text;

}




?>