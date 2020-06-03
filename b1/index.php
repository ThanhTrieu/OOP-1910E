<?php
// cac kien thuc oop - php
// 1- class
class Student
{
	// class : keyword + nameClass
	// khai bao thuoc tinh
	public $name = 'Van Teo';
	//public : pham vi hoat dong cua thuoc tinh
	//$name: ten cua thuoc tinh
	// 'Van Teo' Gia tri cua thuoc tinh
	protected $loving = 'Thi No';
	private $money = 1000;
	
	// khai bao phuong thuc
	public function playGame($game)
	{
		echo "Toi dang choi {$game}";
	}
	
	protected function diChoiVoiBanGai()
	{
		echo "Toi qua luc 20h di xem phim";
	}
	
	private function xinTienGiaDinh()
	{
		echo "xin 3M tro hoc 1 thang";
	}
	
	public function getMoney()
	{
		return $this->money;
		// $this: contro noi tai cua class - dai dien thay the cho ten class truy cap vao tt hoac pt
	}
	
	public function diNhauVoiBanBe()
	{
		// rut tien o cay ATM
		$m = $this->getMoney(); // goi phuong thuc vao ben trong 1 phuong thuc
		echo "nhau het cho nay {$m} thi ve - ko het cung ve";
	}
	
}

// 2 - object
$ob = new Student; // $ob goi la 1 doi tuong cua class A
// truy cap vao thuoc tinh va phuong thuc ben trong class
$myName = $ob->name; // tro vao thuoc tinh - truy cap vao thuoc tinh
// echo $myName;
// $myLove = $ob->loving; // no la thuoc tinh protected nen ko truy cap dc
//echo $myLove;

$ob->playGame('LOL'); // () thuc thi phuong thuc, truyen tham so neu co
echo "<br/>";
$myMoney = $ob->getMoney();
echo $myMoney;
echo "<br/>";
$ob->diNhauVoiBanBe();
