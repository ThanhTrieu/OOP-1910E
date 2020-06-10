<?php

namespace bootstrap;

class Autoload
{
	public function __construct()
	{
		spl_autoload_register([$this, '_myAutoload']);
	}
	
	private function _myAutoload($file)
	{
		// $file : file can auto load
		$file = str_replace('\\', '/', trim($file, '\\')) . '.php';
		if(file_exists($file)){
			require_once $file;
		}
	}
}