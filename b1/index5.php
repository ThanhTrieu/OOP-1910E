<?php
	// cam cac class khac ke thua class A
final class A
{
	public function test()
	{
		echo "test";
	}
}
/*
class B extends A
{

}
$b = new B;
$b->test();
// sai vi Class A khong cho ke thua
*/

class Person
{
	final public function getName()
	{
		echo "Toi ten la Van Teo";
	}
}
class Student extends Person
{
	/*
	public function getName()
	{
		// override
		echo "Toi ten la Van Ty";
	}
	*/
	
	public function showName()
	{
		// echo parent::getName();
		echo $this->getName();
	}
}
$st = new Student;
$st->getName();