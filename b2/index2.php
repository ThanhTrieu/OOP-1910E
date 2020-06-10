<?php

namespace Demo;

require 'index.php';
use b2\b3\A as MyClass; // su dung class co namespace

class B extends MyClass
{
	const PI = 3.14;
	public function getNameSpace()
	{
		// hang so
		return __NAMESPACE__;
	}
	
	public function getDataPi()
	{
		return self::PI;
	}
}
$b = new B;
//echo $b->test();
//echo $b->getNameSpace();
//echo B::PI;
echo $b->getDataPi();