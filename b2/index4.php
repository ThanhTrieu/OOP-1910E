<?php
// abstract class oop php
// khong phai la 1 class thuan tuy - khong the khoi tao doi tuong cho class
abstract class A
{
	// duoc phep khai bao thuoc tinh
	public $name = 'Van Teo';
	protected $age = 20;
	private $money = 100;
	// co 2 loai phuong thuc
	// 1 - phuong thuc abstract
	// la phuong thuc rong - co tu khoa abstract dung dau
	// pham vi cua phuong thuc abstract la public or protected - ko dc la
	// private
	abstract public function getName();
	abstract protected function getAge();
	//abstract private function getMoney(); // sai
	
	// 2 - phuong thuc binh thuong
	public function tets()
	{
		return $this->money;
	}
}

abstract class B extends A
{
	abstract public function demo();
}

class C extends B
{
	// override lai toan bo cac phuong thuc la abstract trong abstract class
	public function getName()
	{
		// TODO: Implement demo() method.
	}
	public function demo()
	{
		// TODO: Implement demo() method.
	}
	
	protected function getAge()
	{
		// TODO: Implement getAge() method.
	}
}

// $a = new A; // sai vi A la abstract class
class D extends C
{
	// trong class D khong bat buoc phai override cac phuong thuc abstract cua abstract class
}