<?php
class Cat
{
	public static $name = 'Tom'; // khai bao thuoc tinh
	private static $age = 3;
	public $color = 'black';
	
	public static function getAge()
	{
		// truy cap vao $age o day
		// return Cat::$age;
		return self::$age;
	}
	public static function getColor()
	{
		// trong phuong thuc la static se ko ton tai contro this mac dinh
		// can phai tao ra doi tuong truy cap no
		$c = new Cat;
		return $c->color;
		// return (new Cat)->color;
	}
	
	public function getName()
	{
		// truy cap vao thuoc tinh name
		return self::$name;
	}
}

$myCat = new Cat;
// echo $myCat->name; // sai - vi name thuoc tinh static
// echo Cat::$name; // truy cap vao thuoc tinh public static
$age = Cat::getAge();
//echo $age;
$color = Cat::getColor();
//echo $color;
$name = $myCat->getName();
echo $name;