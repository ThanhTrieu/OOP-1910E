<?php
//interface oop php
// interface khong phai la 1 class thuan tuy
// no khong the khoi tao dc doi tuong
interface Demo
{
	// khong duoc phep dinh nghia thuoc tinh
	// chi duoc phep khai bao phuong thuc o dang public va la phuong thuc rong
	public function getName();
	public function getAge();
	public function getMoney();
}

interface Test extends Demo
{
	public function getEmail();
}

class A implements Test
{
	// khi class ke thua 1 interface thi no phai override toan bo cac phuong thuc cua interface
	public function getMoney()
	{
		// TODO: Implement getMoney() method.
	}
	public function getAge()
	{
		// TODO: Implement getAge() method.
	}
	public function getEmail()
	{
		// TODO: Implement getEmail() method.
	}
	public function getName()
	{
		// TODO: Implement getName() method.
	}
}

class B extends A
{
	// B khong bat buoc phai override lai cac phuong thuc cua interface
}