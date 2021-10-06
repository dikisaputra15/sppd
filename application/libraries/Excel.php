<?php

if(!defined('BASEPATH')) die('No access');

require_once APPPATH ."/third_party/PHPExcel.php";
require_once APPPATH ."/third_party/PHPExcel/IOFactory.php";


class Excel extends PHPExcel
{
	
	function __construct()
	{
		parent::__construct();
	}
}