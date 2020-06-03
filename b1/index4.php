<?php
// magic method oop
class A
{
	public function test()
	{
		echo "This is method: " . __FUNCTION__;
	}
	
	// constructor
	public function __construct($a)
	{
		echo "This is method : " . __FUNCTION__;
		echo "<br/>";
		echo "Tham so truyen tu ben ngoai class vao la : {$a}";
		echo "<br/>";
		// __FUNCTION__ : hang so - lay ra ten phuong thuc dang lam viec
	}
	
	//destructor
	public function __destruct()
	{
		echo "<br/>";
		echo "This is method : " . __FUNCTION__ . ' -- class -- ' . __CLASS__;
		// __CLASS__: hang so - len ra ten class dang lam viec
	}
	
	public function __get($property)
	{
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh {$property} khong ton tai trong class " . __CLASS__;
		echo "<br/>";
	}
	
	public function __set($name, $value)
	{
		// $name : ten thuoc tinh
		// $value: gia tri cua thuoc
		echo "<br/>";
		echo "Ban vua truy cap vao thuoc tinh {$name} khong ton tai trong class " . __CLASS__ . " va ban da gan gia tri cho thuoc tinh do la {$value}";
		echo "<br/>";
	}
	
	public function __call($name, $arguments)
	{
		// $name : ten cua phuong thuc
		// $arguments: tham so truyen vao phuong thuc neu co (kieu mang)
		echo "<br/>";
		echo "Ban vua truy cap vao phuong thuc {$name} khong ton tai trong class";
		echo "<pre>";
		print_r($arguments);
		echo "<br/>";
		
	}
	
	public static function __callStatic($name, $arguments)
	{
		// $name : ten cua phuong thuc
		// $arguments: tham so truyen vao phuong thuc neu co (kieu mang)
		echo "<br/>";
		echo "Ban vua truy cap vao phuong thuc static {$name} khong ton tai trong class";
		echo "<pre>";
		print_r($arguments);
		echo "<br/>";
	}
}
$a = new A('abc'); // __construct da chay
$a->test();
$a->name;
$a->age = 10;
$a->getName('Teo', 'Ty');
A::getAge(10,20);