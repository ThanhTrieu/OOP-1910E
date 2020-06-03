<?php
class Animal
{
	protected $color = 'white';
	protected static $weight = 300;
	private $name = 'balabala';
}

// ke thua trong class (trong php ko co khai niem da ke thua)
class Dog extends Animal
{
	public function getColor()
	{
		return $this->color;
	}
	public function getWeight()
	{
		return self::$weight;
	}
}
$dog = new Dog;
//echo $dog->getColor();
// echo Dog::$weight; // sai - vi $weight la protected

// viet class kiem tra so nguyen to
class kiemTraSoNguyenTo
{
	public function show($number)
	{
		return $this->check($number);
	}
	private function check($n)
	{
		if($n <= 1){
			return false;
		} elseif ($n == 2) {
			return true;
		} else {
			for ($i = 2; $i <= sqrt($n); $i++) {
				if($n % $i == 0){
					return false;
				}
			}
			return true;
		}
	}
}
$kt = new kiemTraSoNguyenTo;
$num = 11;
$res = $kt->show($num);
//var_dump($res);
if($res){
	echo "{$num} la so nguyen to";
} else {
	echo "{$num} ko la so nguyen to";
}