<?php
trait A
{
	public function getAge()
	{
		return 20;
	}
	public function test()
	{
		echo "Trait A";
	}
}

trait B
{
	public $name = 'Van ty';
	public function getName()
	{
		return $this->name;
	}
	public function test()
	{
		echo "Trait B";
	}
}

class C
{
	use A,B {
		// su dung phuong thuc test cua B thay the cho A
		B::test insteadof A;
		// su dung truc tiep phuc thuc cua A (doi ten)
		A::test as myTest;
		//A::test insteadof B;
	}
}
$c = new C;
echo $c->getAge();
echo "<br/>";
echo $c->getName();
echo "<br/>";
//$c->test();
echo "<br/>";
$c->myTest();